<?php

$router->get('', 'HomeController@index');
$router->get('home', 'UserController@show');

$router->get('register', 'RegisterController@show');
$router->post('register', 'RegisterController@store');

$router->get('login', 'LoginController@show');
$router->post('login', 'LoginController@login');
$router->get('logout', 'LoginController@logout');

$router->post('delete', 'UserController@delete');
$router->get('edit', 'UserController@edit');
$router->post('update', 'UserController@update');
