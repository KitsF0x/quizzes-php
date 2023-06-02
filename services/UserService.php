<?php

namespace services;

class UserService {

    public function createNewUserFromData(array $data): \models\User {
        $user = new \models\User();
        $user->setNick($data['nick']);
        $user->setFirst_name($data['firstName']);
        $user->setLast_name($data['lastName']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);
        return $user;
    }

    public function registerNewUser(array $data) {
        $user = $this->createNewUserFromData($data);
        if ($user->checkIfValueExists('nick', $user->getNick())) {
            session_start();
            $_SESSION['error'] = "User " . $user->getNick() . " already exists";
            header('Location: UserCreate.php');
            exit();
        } else {
            try {
                $user->save();
            } catch (Exception $ex) {
                $_SESSION['error'] = 'Cannot sign up. Check data in form and try again.';
                header('Location: userCreate.php');
                exit();
            }
            $user->login();
            header('Location: index.php');
            exit();
        }
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

    public function logout() {
        session_destroy();
        header("Location: index.php");
        exit();
    }

}
