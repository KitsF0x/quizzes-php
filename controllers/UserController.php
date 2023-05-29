<?php

namespace controllers;

require_once('../models/User.php');

class UserController {

    public function create() {
        require('../views/user/create.php');
    }

    public function store(array $data) {
        $user = new \models\User();
        $user->setNick($data['nick']);
        $user->setFirst_name($data['firstName']);
        $user->setLast_name($data['lastName']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);

        if ($user->checkIfValueExists('nick', $user->getNick())) {
            session_start();
            $_SESSION['error'] = "User " . $user->getNick() . " already exists";
            header('Location: UserCreate.php');
            die();
        } else {
            try {
                $user->save();
            } catch (Exception $ex) {
                $_SESSION['error'] = 'Cannot sign up. Check data in form and try again.';
                header('Location: userCreate.php');
            }
            $user->login();
            header('Location: index.php');
        }
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }

    public function loginForm() {
        require('../views/user/login.php');
    }

    public function login(array $data) {
        $user = new \models\User();
        $user->setNick($data['nick']);
        $user->setPassword($data['password']);
        if (!$user->login()) {
            $_SESSION['error'] = 'Cannot log in. Check data and try again';
            header("Location: userLoginForm.php");
            exit();
        }
        header("Location: index.php");
        exit();
    }
    
    public function show() {
        require('../views/user/show.php');
    }
}
