<?php

require 'app/bootstrap.php';

$router = new Router;
require 'routes.php';

require $router->direct(Request::uri());
