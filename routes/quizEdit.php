<?php
require_once ('../utils/sessionUtils.php');
redirectToIndexIfUserIsNotLoggedIn();

require_once ('../controllers/QuizController.php');
$quizController = new controllers\QuizController();
$quizController->edit($_POST);