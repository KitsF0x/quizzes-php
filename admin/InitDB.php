<?php

require_once '../config.php';
$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);

// Create users table
$sql = '
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

COMMIT;
ALTER TABLE `users` ADD `nick` TEXT NOT NULL AFTER `id`; 

CREATE TABLE `quizzes` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `creatorId` INT NOT NULL , 
    `title` TEXT NOT NULL , 
    `description` TEXT NULL , 
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;
';

$stmt = $pdo->prepare($sql);
$stmt->execute();
