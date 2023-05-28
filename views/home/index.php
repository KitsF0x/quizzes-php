<html>
    <head>
        <link rel="stylesheet" href="http://localhost/quizes/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <title>Home</title>

    </head>
    <body class="container">
        <script src="http://localhost/quizes/node_modules/bootstrap/dist/css/bootstrap.min.css" defer></script>
        Home
        <?php
        require_once '../controllers/NavController.php';
        $nav = new \controllers\NavController();
        $nav->renderNavigation();
        ?>
    </body>
</html>
