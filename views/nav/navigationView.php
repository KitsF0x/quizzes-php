
<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto"> <!-- Dodano klasę 'ms-auto' -->
                <?php if (isset($_SESSION['user-logged-in'])) : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['user-nick']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="userProfile.php">Your profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="quizList.php">Your quizes</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="userLogout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="userCreate.php">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userLoginForm.php">Sign in</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>