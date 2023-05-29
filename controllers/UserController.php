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
            $_SESSION['user-logged-in'] = true;
            $_SESSION['user-id'] = $user->getId();
            $_SESSION['user-nick'] = $user->getNick();
            $_SESSION['user-first-name'] = $user->getFirst_name();
            $_SESSION['user-last-name'] = $user->getLast_name();
            $_SESSION['user-email'] = $user->getLast_name();
            $_SESSION['user-password'] = $user->getLast_name();
            header('Location: index.php');
        }
    }

}
