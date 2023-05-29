<?php
@session_start(); 
if(!isset($_SESSION['user-logged-in'])) {
    header("Location: userLoginForm.php");
    exit();
}
require_once ('../controllers/UserController.php');
$userController = new controllers\UserController();
$userController->show();