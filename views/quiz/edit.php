<?php require '../layout/up.php'; ?>

<?php
$quiz = new \models\Quiz();
$quiz->getQuizBydId($_POST['id']);
?>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center"><?php echo $quiz->getTitle(); ?></h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Question</th>
                            <th scope="col">Answer</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
                <form action="questionCreate.php" method="POST">
                    <input type="hidden" value="<?php echo $quiz->getId(); ?>" name="quizId"> 
                    <button class="btn btn-primary" type="submit">Add a new question</button>                   
                </form>
            </div>
        </div>
    </div>
</div>
<?php require '../layout/down.php'; ?>