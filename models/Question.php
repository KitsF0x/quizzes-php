<?php

namespace models;

class Question {

    private $id;
    private $quizId;
    private $text;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getQuizId() {
        return $this->quizId;
    }

    public function setQuizId($quizId) {
        $this->quizId = $quizId;
    }

    public function getText() {
        return $this->text;
    }

    public function setText($text) {
        $this->text = $text;
    }

}
