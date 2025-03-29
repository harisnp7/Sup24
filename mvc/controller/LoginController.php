<?php
require_once(__DIR__ . '/../model/UserModel.php');

class LoginController {
    private $userModel;

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $this->userModel = new UserModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['user'] ?? '';
            $password = $_POST['pwd'] ?? '';

            if ($this->userModel->loginHash($username, $password)) {
                $_SESSION['user'] = $username;
                $_SESSION['message'] = 'Uspešna prijava!';
                header('Location: index.php?page=home'); // Vrati na naslovnu stranu
                exit;
            } else {
                $_SESSION['message'] = 'Greška: Pogrešno korisničko ime ili lozinka.';
                header('Location: index.php?page=login'); // Vrati na stranicu za prijavu
                exit;
            }
        }
    }

    public function logout() {
        $this->userModel->logout();
        header('Location: index.php?page=home');
        exit;
    }
}