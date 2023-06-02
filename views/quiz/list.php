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
                            <form action="../routes/quizEdit.php" method="POST">
                                <input type="hidden" value="<?php echo $el->getId(); ?>" name="id"/>
                                <button class="btn btn-warning">Edit</button>
                            </form>

                            <form action="../routes/quizDelete.php" method="POST">
                                <input type="hidden" value="<?php echo $el->getId(); ?>" name="id"/>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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