
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Quizzes</a>
                </li>
                <?php 
                if(isset($_SESSION['user-logged-in'])) :
                ?>
                <li class = "nav-item">
                    <a class = "nav-link" href = "#"><?php echo $_SESSION['user-nick'];?></a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "#">Create quiz</a>
                </li>
                <?php 
                    else :
                ?>
                <li class = "nav-item">
                    <a class = "nav-link" href = "userCreate.php">Sign up</a>
                </li>
                <li class = "nav-item">
                    <a class = "nav-link" href = "#">Sign in</a>
                </li>
                <?php 
                    endif;
                ?>
            </ul>
        </div>
    </div>
</nav>