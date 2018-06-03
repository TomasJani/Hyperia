<?php

require 'core/bootstrap.php';

$router = new Router;
require 'routes.php';

require $router->direct(Request::uri(), Request::method());
