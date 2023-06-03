<?php require '../layout/up.php'; ?>

<?php 
    require '../models/Quiz.php';
    $quiz = new models\Quiz();
    $quiz->getQuizBydId($quizId);
?>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Add a new question for <?php echo $quiz->getTitle(); ?> quiz</h3>
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
                <button class="btn btn-primary">Add a new question</button>
            </div>
        </div>
    </div>
</div>
<?php require '../layout/down.php'; ?>