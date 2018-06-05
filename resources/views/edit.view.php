<?php require 'layout/header.php'; ?>

<div class="container">
    <h1>Edit</h1>
    <hr>

    <form method="POST" action="/update">

        <div class="form-group row">
            <div class="col-md-6">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="<?php echo $_SESSION['name'] ?>" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="surname" class="col-md-4 col-form-label text-md-right">Surname</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control" name="surname" value="<?php echo $_SESSION['surname'] ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-md-4 col-form-label text-md-right">City</label>

            <div class="col-md-6">
                <input id="city" type="text" class="form-control" name="city" value="<?php echo $_SESSION['city'] ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="age" class="col-md-4 col-form-label text-md-right">Age</label>

            <div class="col-md-6">
                <input id="age" type="number" class="form-control" name="age" value="<?php echo $_SESSION['age'] ?>" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" value="******" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="******" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>
    </form>

</div>

<?php require 'layout/footer.php'; ?>
