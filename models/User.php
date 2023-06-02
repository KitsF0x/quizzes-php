<?php

namespace models;

require_once 'Model.php';

class User extends Model{

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
        $pdo = $this->createPDODatabaseConnection();

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

    public function checkIfValueExists($column, $value): bool {
        $pdo = $this->createPDODatabaseConnection();
        $sql = "SELECT * FROM users WHERE $column = :value";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":value", $value);
        $stmt->execute();
        return ($stmt->rowCount() > 0);
    }

    public function login() {
        $pdo = $this->createPDODatabaseConnection();
        $sql = "SELECT * FROM users WHERE nick = :nick AND password = :password";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":nick", $this->getNick());
        $stmt->bindValue(":password", $this->getPassword());
        $stmt->execute();
        $user = $stmt->fetch(\PDO::FETCH_ASSOC);
        if ($user) {
            $_SESSION['user-logged-in'] = true;
            $_SESSION['user-id'] = $user['id'];
            $_SESSION['user-nick'] = $user['nick'];
            $_SESSION['user-first-name'] = $user['first_name'];
            $_SESSION['user-last-name'] = $user['last_name'];
            $_SESSION['user-email'] = $user['email'];
            $_SESSION['user-password'] = $user['password'];
            return true;
        }
        return false;
    }

}
