<?php require '../layout/up.php'; ?>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center"><?php echo $_SESSION['user-nick'] . '\'s profile'; ?></h3>
                <?php foreach ($_SESSION as $key => $value): ?>
                    <p><?php echo $key . " -> " . $value; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php require '../layout/down.php'; ?>