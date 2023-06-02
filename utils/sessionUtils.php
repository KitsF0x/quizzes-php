<?php

function ifVaraibaleInSessionIsSet(string $variable) {
    @session_start();
    return isset($_SESSION[$variable]);
}

function redirectIfVariableInSessionIsSet(string $variable, string $location) {
    if (ifVaraibaleInSessionIsSet($variable)) {
        header("Location: " . $location);
    }
}

function redirectIfVariableInSessionIsNotSet(string $variable, string $location) {
    if (!ifVaraibaleInSessionIsSet($variable)) {
        header("Location: " . $location);
    }
}

function redirectToIndexIfUserIsLoggedIn() {
    redirectIfVariableInSessionIsSet('user-logged-in', 'index.php');
}

function redirectToIndexIfUserIsNotLoggedIn() {
    redirectIfVariableInSessionIsNotSet('user-logged-in', 'index.php');
}


