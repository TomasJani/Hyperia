<?php require 'layout/header.php'; ?>

<div class="container">
    <h1>Login</h1>
    <hr>

    <form method="POST" action="">

        <?php require 'partials/errors.php'; ?>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </div>
        </div>
    </form>

</div>

<?php require 'layout/footer.php'; ?>
