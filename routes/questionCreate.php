<?php
require_once ('../utils/sessionUtils.php');
redirectToIndexIfUserIsNotLoggedIn();

require_once ('../controllers/QuestionController.php');
$questionController = new controllers\QuestionController();
$questionController->create($_POST['quizId']);


