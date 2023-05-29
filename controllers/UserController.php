<?php

namespace controllers;

require_once('../models/User.php');
require_once('../services/UserService.php');

class UserController {

    public function create() {
        require('../views/user/create.php');
    }

    public function store(array $data) {
        $userService = new \services\UserService();
        $userService->registerNewUser($data);
    }

    public function logout() {
        $userService = new \services\UserService();
        $userService->logout();
    }

    public function loginForm() {
        require('../views/user/login.php');
    }

    public function login(array $data) {
        $userService = new \services\UserService();
        $userService->login($data);
    }

    public function show() {
        require('../views/user/show.php');
    }

}
