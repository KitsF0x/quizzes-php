<?php

namespace services;

class QuizService {

    public function createNewQuiz(array $data) : \models\Quiz {
        $quiz = new \models\Quiz();
        $quiz->setCreatorId($_SESSION['user-id']);
        $quiz->setTitle($data['title']);
        $quiz->setDescription($data['description']);
        return $quiz;
    }
    
    public function storeQuizInDatabase(array $data) {
        $quiz = $this->createNewQuiz($data);
        $quiz->save();
    }
    
    public function delete($data) {
        $quiz = new \models\Quiz();
        $quiz->deleteQuizById($data['id']);
    }
}
