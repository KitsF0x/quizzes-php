<?php

namespace controllers;


class QuestionController {
    public function create($quizId) {
        require('../views/question/create.php');
    }
}
