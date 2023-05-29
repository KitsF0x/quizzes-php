<?php

namespace models;

require_once '../config.php';

class User {

    private $id;
    private $nick;
    private $first_name;
    private $last_name;
    private $email;
    private $password;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNick() {
        return $this->nick;
    }

    public function setNick($nick) {
        $this->nick = $nick;
    }

    public function getFirst_name() {
        return $this->first_name;
    }

    public function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function save() {
        $pdo = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

        $sql = "INSERT INTO users (nick, first_name, last_name, email, password) 
                VALUES (:nick, :firstName, :lastName, :email, :password)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nick', $this->nick);
        $stmt->bindParam(':firstName', $this->first_name);
        $stmt->bindParam(':lastName', $this->last_name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);

        try {
            $stmt->execute();
            $this->id = $pdo->lastInsertId();
        } catch (PDOException $e) {
            //todo
        }
    }

    public function checkIfValueExists($column, $value) : bool {
        $pdo = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $sql = "SELECT * FROM users WHERE $column = :value";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        return ($stmt->rowCount() > 0);
    }

}
