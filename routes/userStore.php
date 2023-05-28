<?php

require_once ('../controllers/UserController.php');
$userController = new controllers\UserController();
$userController->store($_POST);

