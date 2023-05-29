<?php
@session_start(); 
require_once ('../controllers/UserController.php');
$userController = new controllers\UserController();
$userController->logout();
