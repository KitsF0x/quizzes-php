<html>
    <head>
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <title>Home</title>

    </head>
    <body class="container">
        <script src="../node_modules/bootstrap/dist/css/bootstrap.min.css" defer></script>
        <?php
        require_once '../controllers/NavController.php';
        $nav = new \controllers\NavController();
        $nav->renderNavigation();
        ?>
    </body>
</html>
