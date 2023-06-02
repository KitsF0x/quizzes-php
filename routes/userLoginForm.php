<?php
require_once ('../utils/sessionUtils.php');
redirectToIndexIfUserIsLoggedIn();

require_once ('../controllers/UserController.php');
$userController = new controllers\UserController();
$userController->loginForm();