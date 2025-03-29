<?php

include_once(__DIR__ . "/../model/MachineModel.php");
include_once(__DIR__ . "/../model/UserModel.php");

class Controller
{
    public $machineModel;
    public $userModel;

    public function __construct()
    {
        $this->machineModel = new MachineModel();
        $this->userModel = new UserModel();
    }

    public function invoke()
    {
        $user = $this->userModel->getLoggedin();

        // Početna stranica
        if (!isset($_GET['machines']) && !isset($_GET['about']) && !isset($_GET['login']) && !isset($_GET['register']) && !isset($_GET['machine'])) {
            include(__DIR__ . '/../view/Home.php');
            return;
        }

        // Stranica Liste mašina
        if (isset($_GET['machines'])) {
            $machines = $this->machineModel->getMachineList();
            include(__DIR__ . '/../view/MachineList.php');
            return;
        }

        // Stranica O nama
        if (isset($_GET['about'])) {
            include(__DIR__ . '/../view/About.php');
            return;
        }

        // Detalji mašine
        if (isset($_GET['machine'])) {
            $machineId = intval($_GET['machine']);
            $machine = $this->machineModel->getMachineById($machineId);
            if ($machine) {
                include(__DIR__ . '/../view/MachineDetails.php');
            } else {
                echo "Greška: Mašina nije pronađena.";
            }
            return;
        }

        // Prijava
        if (isset($_GET['login'])) {
            include(__DIR__ . '/../view/Login.php');
            return;
        }

        // Registracija
        if (isset($_GET['register'])) {
            include(__DIR__ . '/../view/Register.php');
            return;
        }

        // Prijava - POST zahtev
        if (isset($_POST['login']) && !empty($_POST['user']) && !empty($_POST['pwd'])) {
            $username = trim($_POST['user']);
            $password = trim($_POST['pwd']);

            if ($this->userModel->loginHash($username, $password)) {
                $_SESSION['message'] = "Prijava uspešna!";
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['message'] = "Greška: Neispravno korisničko ime ili lozinka.";
                header("Location: index.php?login");
                exit();
            }
        }

        // Odjava - POST zahtev
        if (isset($_POST['logout'])) {
            $this->userModel->logout();
            $_SESSION['message'] = "Uspešno ste se odjavili.";
            header("Location: index.php");
            exit();
        }

        // Registracija - POST zahtev
        if (isset($_POST['register']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    var_dump($username, $password); // TESTIRANJE
    die();

    $registerResult = $this->userModel->registerUser($username, $password);
    if ($registerResult === "Registracija uspešna!") {
        $_SESSION['message'] = $registerResult;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['message'] = $registerResult;
        header("Location: index.php?register");
        exit();
    }
}
        }
    
}
?>