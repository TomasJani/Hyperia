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
            'email' => Request::get('email'),
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
