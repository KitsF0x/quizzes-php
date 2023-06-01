<?php require '../layout/up.php'; ?>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Your quizes</h3>
                <?php
                $quiz = new models\Quiz();
                foreach ($quiz->getQuizesCreatedByUserWithId($_SESSION['user-id']) as $el):
                    ?>
                    <div class="card">

                        <div class="card-body">
                            <h3 class="card-title border-bottom"> <?php echo $el->getTitle(); ?> </h3>
                            <h4> <?php echo $el->getDescription(); ?> </h4>
                            <button class="btn btn-primary">Run</button>
                            <button class="btn btn-success">Stats</button>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </div>
                    </div>


                <?php endforeach; ?>
                <a href="quizCreate.php">
                    <button class="btn btn-primary">New quiz</button>
                </a>
            </div>
        </div>
    </div>
</div>
<?php require '../layout/down.php'; ?>