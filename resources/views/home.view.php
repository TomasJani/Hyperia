<?php require 'layout/header.php'; ?>

<div class="container">

    <?php require 'partials/message.php'; ?>

    <div class="row">
        <div class="col-sm-11">
            <h3 class="my-3"><?php echo $_SESSION['name'] . ' ' . $_SESSION['surname']  ?></h3>
            <p class="mb-1">Email: <?php echo $_SESSION['email'] ?></p>
            <p class="mb-1">Age: <?php echo $_SESSION['age'] ?></p>
            <p class="mb-1">City: <?php echo $_SESSION['city'] ?></p>
            <small>Created at: <?php echo date("F j, Y, g:i a", strtotime($_SESSION['created_at'])) ?></small>
        </div>

        <div class="col-sm-1 py-3">
            <div class="row">
                <form action="/edit" method="post">
                    <div class="form-group ml-3 mr-2 mt-0">
                        <button type="submit" class="btn btn-primary btn-sm btn-block">
                            Edit
                        </button>
                    </div>
                </form>

                <form action="/delete" method="post">
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
                    </div>
                    <div class="form-group my-0">
                        <button type="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <?php foreach ($users as $user): ?>

            <div class="col-sm-4">
                <div class="card mb-3">

                    <div class="card-header">
                        <?php echo $user['name'] . ' ' . $user['surname']  ?>
                    </div>

                    <div class="card-body pb-0 pt-2">
                        <blockquote class="blockquote mb-0">
                            <p class="smaller my-1">Email: <?php echo $user['email'] ?></p>
                            <p class="smaller my-1">Age: <?php echo $user['age'] ?></p>
                            <p class="smaller my-1">City: <?php echo $user['city'] ?></p>


                                <small>
                                    <footer class="blockquote-footer">Created at
                                        <cite title="Source Title"><?php echo date("F j, Y, g:i a", strtotime($user['created_at'])) ?></cite>
                                    </footer>
                                </small>
                        </blockquote>

                        <div class="row">
                            <form action="/edit" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="id" value="<?php echo $user['id'] ?>">
                                </div>
                                <div class="form-group mb-3 ml-3 mr-2 mt-0">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Edit
                                    </button>
                                </div>
                            </form>

                            <form action="/delete" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="id" value="<?php echo $user['id'] ?>">
                                </div>
                                <div class="form-group my-0">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        <?php endforeach; ?>
    </div>
    <div class="row">
        <nav class="mx-auto mt-3" aria-label="...">
            <ul class="pagination">
                <?php require 'partials/prevButton.php'; ?>

                <li class="page-item active">
                    <a class="page-link" href="/home?page=<?php echo $page; ?>"><?php echo $page; ?> <span class="sr-only">(current)</span></a>
                </li>

                <?php require 'partials/nextbutton.php'; ?>

            </ul>
        </nav>
  </div>

</div>


<?php require 'layout/footer.php'; ?>
