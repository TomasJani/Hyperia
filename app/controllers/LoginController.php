<?php

class LoginController
{
    public function show()
    {
        return view('login');
    }

    public function login()
    {
        $user = new User(App::get('pdo'));

        $parameters = [
            'surname' => Request::get('surname'),
            'password' => Request::get('password')
        ];

        $user->attempt($parameters);
    }

    public function logout()
    {
        User::logout();      
    }

}
