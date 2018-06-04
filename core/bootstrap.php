<?php

require 'vendor/autoload.php';

App::bind('config', require 'config.php');
App::bind('pdo', Connection::make(App::get('config')['database']));
App::bind('database', new QueryBuilder(App::get('pdo')));
