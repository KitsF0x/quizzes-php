<?php

require_once ('../controllers/HomeController.php');
$homeController = new controllers\HomeController();
$homeController->renderIndex();
