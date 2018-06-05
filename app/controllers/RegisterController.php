<?php

class RegisterController
{
    public function show()
    {
        Middleware::guest();

        return view('register');
    }

    public function store()
    {
        Middleware::guest();

        $user = new User(App::get('pdo'));

        $parameters = [
            'name' => Request::get('name'),
            'surname' => Request::get('surname'),
            'password' => Request::get('password'),
            'city' => Request::get('city'),
            'age' => Request::get('age'),
            'created_at' => date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME'])
        ];

        User::validate($parameters);

        $user->create($parameters);
        $user->attempt($parameters);
    }

}
