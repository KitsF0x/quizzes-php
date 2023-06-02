<?php

namespace models;

require_once '../config.php';

class Model {
    public function createPDODatabaseConnection() {
        return new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    }
}
