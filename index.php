<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Definiši $page sa podrazumevanom vrednošću ako nije prosleđena putem GET parametra
$page = $_GET['page'] ?? 'home';

// Učitaj osnovni kontroler
require_once(__DIR__ . '/mvc/controller/Controller.php');
$controller = new Controller();

// Učitaj LoginController ako je potrebno
if ($page === 'login_action') {
    require_once(__DIR__ . '/mvc/controller/LoginController.php');
    $loginController = new LoginController();
    $loginController->login();
} else {
    $controller->invoke();
}