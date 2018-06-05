<?php

class  Middleware
{
    public static function auth()
    {
        if (! isset($_SESSION['name'])) {
            redirect('login');
        }
    }

    public static function guest()
    {
        if (isset($_SESSION['name'])) {
            redirect('home');
        }
    }
}
