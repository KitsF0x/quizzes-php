<?php
@session_start(); 
if(isset($_SESSION['user-logged-in'])) {
    header("Location: index.php");
    exit();
}
require_once ('../controllers/UserController.php');
$userController = new controllers\UserController();
$userController->loginForm();