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

        if(isset($_POST['id'])) {
            $id = Request::get('id');
            $toEdit = App::get('database')->getById($id)[0];
            $toEdit = json_decode(json_encode($toEdit), true);;
        }
        else {
            $toEdit = $_SESSION;
        }

        return view('edit', compact('toEdit'));
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
