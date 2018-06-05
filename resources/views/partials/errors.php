<?php if (isset($formErrors)): ?>
    <div class="form-group row">
        <div class="col-md-6 offset-md-4">
            <?php foreach ($formErrors as $error): ?>
                <div class="alert alert-danger my-2" role="alert">
                    <?php echo $error ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>
