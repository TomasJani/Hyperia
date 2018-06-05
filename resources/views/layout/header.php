<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="resources/assets/css/app.css">

    </head>
    <body>
        <div class="content">

            <nav class="navbar navbar-expand-sm bg-gradient mb-3 py-3">
                <div class="container">
                    <a class="navbar-brand text-white" href="/">
                        <h3>Hyperia Assignment</h3>
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <?php if (isset($_SESSION['surname'])): ?>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-light mr-2" href="/home">
                                        <?php echo $_SESSION['surname'] ?>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-light mr-2" href="/logout">Logout</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-light mr-2" href="/login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-light" href="/">Register</a>
                                </li>
                            <?php endif; ?>


                        </ul>
                    </div>
                </div>
            </nav>
