<?php
require_once(__DIR__ . '/../../config/Database.php');

class UserModel {
    private $conn;

    public function __construct() {
        $this->conn = Database::getConnection();
    }

    // Funkcija za dohvaćanje korisnika prema username-u
    public function getUserByUsername($username) {
        $stmt = $this->conn->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // REGISTRACIJA KORISNIKA
    public function registerUser($username, $password) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        if (!$hashedPassword) {
            return "Greška prilikom generisanja hash-a lozinke.";
        }

        try {
            $stmt = $this->conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->execute([$username, $hashedPassword]);
            return "Registracija uspešna!";
        } catch (PDOException $e) {
            if ($e->getCode() === '23000') {
                return "Greška: Korisničko ime već postoji.";
            } else {
                return "Greška prilikom izvršavanja upita: " . $e->getMessage();
            }
        }
    }

    // PRIJAVA KORISNIKA
    public function loginHash($username, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($password, $result['password'])) {
            $_SESSION['user'] = $result['username'];
            return true;
        }

        return false;
    }

    // PROVERA DA LI JE KORISNIK ULOGOVAN
    public function getLoggedIn() {
        return $_SESSION['user'] ?? null;
    }

    // ODJAVA KORISNIKA
    public function logout() {
        session_unset();
        session_destroy();
    }
}