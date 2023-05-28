<html>
    <head>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body class="container">
        <?php
        require_once '../controllers/NavController.php';
        $nav = new \controllers\NavController();
        $nav->renderNavigation();
        ?>

