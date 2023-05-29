<?php require '../layout/up.php'; ?>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3>Sign in</h3>

                <?php if (isset($_SESSION['error'])): ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error']; ?>
                </div>

                <?php
                unset($_SESSION['error']);
                endif;
                ?>
                <form action="userLogin.php" method="POST">
                    <div class="mb-3">
                        <label for="inputNick" class="form-label">Nick</label>
                        <input type="text" class="form-control" id="inputNick" name="nick" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Passoword</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../layout/down.php'; ?>