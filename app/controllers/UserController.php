<?php

class UserController
{
    public function show()
    {
        $users = App::get('database')->selectAll('users');
        return view('home', compact('users'));
    }

    public function edit()
    {
        return view('edit');
    }

    public function update()
    {
        $user = new User(App::get('pdo'));

        $parameters = [
            'name' => Request::get('name'),
            'surname' => Request::get('surname'),
            'password' => Request::get('password'),
            'city' => Request::get('city'),
            'age' => Request::get('age'),
            'id' => Request::get('id')
        ];

        User::validate($parameters);
        $user->update($parameters);

        return redirect('home');
    }

    public function delete()
    {
        $user = new User(App::get('pdo'));

        $user->delete(Request::get('id'));
    }

}
