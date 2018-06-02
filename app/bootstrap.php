<?php

$app = [];
$app['config'] = require 'config.php';

require 'app/Router.php';
require 'app/Request.php';
require 'app/database/Connection.php';
require 'app/database/QueryBuilder.php';

$pdo = Connection::make($app['config']['database']);
$app['database'] = new QueryBuilder($pdo);
