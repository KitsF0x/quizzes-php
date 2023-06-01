<?php
@session_start(); 
if(!isset($_SESSION['user-logged-in'])) {
    header("Location: index.php");
    exit();
}
require_once ('../controllers/QuizController.php');
$quizController = new controllers\QuizController();
$quizController->create();