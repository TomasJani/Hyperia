<?php

class Validate
{
    public static function email($email)
    {
        if (isset(App::get('database')->getByEmail($email)[0])) {
            return true;
        }
        else {
            return false;
        }
    }

    public static function password($password)
    {
        $passwordConfirm = Request::get('password_confirmation');

        if ($passwordConfirm === $password) {
            return true;
        }
        else {
            return false;
        }
    }
}
