<?php

$app = [];
$app['config'] = require 'config.php';

require 'vendor/autoload.php';

$pdo = Connection::make($app['config']['database']);
$app['database'] = new QueryBuilder($pdo);
