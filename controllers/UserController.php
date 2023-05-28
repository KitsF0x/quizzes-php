<?php

namespace controllers;

require_once('../models/User.php');

class UserController {

    public function create() {
        require('../views/user/create.php');
    }

    public function store(array $data) {
        $user = new \models\User();
        $user->setFirst_name($data['firstName']);
        $user->setLast_name($data['lastName']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);

        $user->save();
    }

}
