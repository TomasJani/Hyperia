<?php require 'layout/header.php'; ?>

<div class="container">

    <div class="row">
        <div class="col-sm-10">
            <h3 class="my-3"><?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']  ?></h3>
            <p class="mb-1">Age: <?php echo $_SESSION['age'] ?></p>
            <p class="mb-1">City: <?php echo $_SESSION['city'] ?></p>
            <small>Created at: <?php echo date("F j, Y, g:i a", strtotime($_SESSION['created_at'])) ?></small>
        </div>

        <div class="col-sm-2 align-middle">
            <div class="btn-group-vertical float-right p-4">
                <a class="btn btn-primary" href="/edit">Edit</a>
                <a class="btn btn-danger" href="/delete">Delete</a>
            </div>
        </div>

    </div>


    <hr>

    <div class="row">
        <?php foreach ($users as $user): ?>

            <div class="col-sm-4">
                <div class="card mb-3">

                    <div class="card-header">
                        <?php echo $user->name . ' ' . $user->surname  ?>
                    </div>

                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Age: <?php echo $user->age ?></p>
                            <p>City: <?php echo $user->city ?></p>
                            <footer class="blockquote-footer">Created at
                                <cite title="Source Title"><?php echo date("F j, Y, g:i a", strtotime($user->created_at)) ?></cite>
                            </footer>
                        </blockquote>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>
    </div>

</div>

<?php require 'layout/footer.php'; ?>
