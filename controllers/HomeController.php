<?php

namespace controllers;

class HomeController {
    public function renderIndex() {
        require('views/home/index.php');
    }
}
