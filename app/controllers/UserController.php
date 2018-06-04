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

    }

    public function delete()
    {

    }

}
