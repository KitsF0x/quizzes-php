<?php
require_once ('../utils/sessionUtils.php');
redirectToIndexIfUserIsNotLoggedIn();

require_once ('../controllers/UserController.php');
$userController = new controllers\UserController();
$userController->show();