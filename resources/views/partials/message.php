<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-success my-2" role="alert">
        <?php
            echo $_SESSION['message'];
            $_SESSION['message'] = NULL;
        ?>
    </div>
<?php endif; ?>
