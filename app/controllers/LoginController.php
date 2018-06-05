<?php

class LoginController
{
    public function show()
    {
        Middleware::guest();

        return view('login');
    }

    public function login()
    {
        Middleware::guest();

        $user = new User(App::get('pdo'));

        $parameters = [
            'surname' => Request::get('surname'),
            'password' => Request::get('password')
        ];

        $user->attempt($parameters);
    }

    public function logout()
    {
        Middleware::auth();

        User::logout();
    }
}
