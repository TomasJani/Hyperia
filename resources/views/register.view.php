<?php require 'layout/header.php'; ?>

<div class="container">
    <h1>Register</h1>
    <hr>

    <form method="POST" action="/register">

        <?php require 'partials/errors.php'; ?>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
            </div>
        </div>


        <div class="form-group row">
            <label for="surname" class="col-md-4 col-form-label text-md-right">Surname</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control" name="surname" value="" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control" name="city" value="" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

            <div class="col-md-6">
                <input id="age" type="number" class="form-control" name="age" value="" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" name="register" values="register" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>

    </form>

</div>

<?php require 'layout/footer.php'; ?>
