<?php

require_once '../config.php';
$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

// Remove users table
$sql = 'DROP TABLE `users`, `quizes`';
$stmt = $pdo->prepare($sql);
$stmt->execute();
