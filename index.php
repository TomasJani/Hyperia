<?php

require 'core/bootstrap.php';

session_start();

$router = new Router;
require 'routes.php';

$router->direct(Request::uri(), Request::method());
