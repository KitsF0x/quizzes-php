<?php require '../layout/up.php'; ?>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Sign up</h3>

                <?php require('../views/utils/errorAlert.php');?>
                <form action="userStore.php" method="POST">
                    <div class="mb-3">
                        <label for="inputFirstName" class="form-label">First name</label>
                        <input type="text" class="form-control" id="inputFirstName" name="firstName" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputLastName" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="inputLastName" name="lastName" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputNick" class="form-label">Nick</label>
                        <input type="text" class="form-control" id="inputNick" name="nick" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Passoword</label>
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputRepeatPassword" class="form-label">Repeat password</label>
                        <input type="password" class="form-control" id="inputRepeatPassword" name="repeatPassword" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../layout/down.php'; ?>