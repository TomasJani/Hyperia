<?php

function dd($expression)
{
    die(var_dump($expression));
}

function view($name, $data = [])
{
    extract($data);

    return require "resources/views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
    die();
}

function validatePassword($password)
{
    $passwordConfirm = Request::get('password_confirmation');

    if ($passwordConfirm === $password) {
        return true;
    }
    else {
        return false;
    }
}
