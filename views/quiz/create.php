<?php require '../layout/up.php'; ?>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Create a new quiz</h3>

                <?php if (isset($_SESSION['error'])): ?>

                <div class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['error']; ?>
                </div>

                <?php
                unset($_SESSION['error']);
                endif;
                ?>
                <form action="quizStore.php" method="POST">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputDescription" class="form-label">Description</label>
                        <input type="description" class="form-control" id="inputDescription" name="description">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../layout/down.php'; ?>