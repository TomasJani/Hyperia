<?php

class UserController
{
    public function show()
    {
        Middleware::auth();

        Pagination::paginate();
    }

    public function edit()
    {
        Middleware::auth();

        return view('edit');
    }

    public function update()
    {
        Middleware::auth();

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
        Middleware::auth();

        $user = new User(App::get('pdo'));

        $user->delete(Request::get('id'));
    }

}
