<?php

namespace controllers;

require_once('../models/Quiz.php');
require_once('../services/QuizService.php');

class QuizController {

    public function show() {
        require '../views/quiz/list.php';
    }

    public function create() {
        require '../views/quiz/create.php';
    }

    public function store(array $data) {
        $quizService = new \services\QuizService();
        $quizService->storeQuizInDatabase($data);
        header("Location: quizList.php");
        exit();
    }

    public function delete(array $data) {
        $quizService = new \services\QuizService();
        $quizService->delete($data);
        header("Location: quizList.php");
        exit();
    }

    public function edit(array $data) {
        require '../views/quiz/edit.php';
    }

}
