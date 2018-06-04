<?php require 'layout/header.php'; ?>

<div class="container">

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
