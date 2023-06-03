<?php

namespace models;

require_once 'Model.php';

class Quiz extends Model {

    private $id;
    private $creatorId;
    private $title;
    private $description;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCreatorId() {
        return $this->creatorId;
    }

    public function setCreatorId($creatorId) {
        $this->creatorId = $creatorId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function save() {
        $pdo = $this->createPDODatabaseConnection();

        $sql = "INSERT INTO quizzes (creatorId, title, description) 
                VALUES (:creatorId, :title, :description)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':creatorId', $this->creatorId);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':description', $this->description);

        try {
            $stmt->execute();
            $this->id = $pdo->lastInsertId();
        } catch (PDOException $e) {
            //todo
        }
    }

    public function checkIfValueExists($column, $value): bool {
        $pdo = $this->createPDODatabaseConnection();
        $sql = "SELECT * FROM quizzes WHERE $column = :value";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        return ($stmt->rowCount() > 0);
    }

    public function getQuizesCreatedByUserWithId($id) {
        $pdo = $this->createPDODatabaseConnection();
        $sql = "SELECT * FROM quizzes WHERE creatorId = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();

        $arrayOfModels = array();

        foreach ($stmt->fetchAll() as $row) {
            $model = new Quiz();
            $model->setId($row['id']);
            $model->setCreatorId($row['creatorId']);
            $model->setTitle($row['title']);
            $model->setDescription($row['description']);

            array_push($arrayOfModels, $model);
        }
        return $arrayOfModels;
    }

    public function deleteQuizById($id) {
        $pdo = $this->createPDODatabaseConnection();
        $sql = "DELETE FROM quizzes WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();
    }

    public function getQuizBydId($id) {
        $pdo = $this->createPDODatabaseConnection();
        $sql = "SELECT * FROM quizzes WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->execute();

        $data = $stmt->fetch();

        $this->setId($id);
        $this->setCreatorId($data['creatorId']);
        $this->setTitle($data['title']);
        $this->setDescription($data['description']);
    }
}
