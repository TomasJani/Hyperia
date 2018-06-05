<?php

class Request
{
    public static function uri()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        if (strpos($uri, '?')) {
            $uri = explode('?', $uri)[0];
        }
        return $uri;
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function get($data)
    {
        return $_POST[$data];
    }
}
