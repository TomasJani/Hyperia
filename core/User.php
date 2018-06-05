<?php

class User
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function validate($parameters)
    {
        $formErrors = [];

        if (! ((strlen($parameters['name'])) > 3 and (strlen($parameters['name']) < 45))) {
            array_push($formErrors, "Check your name.");
        }

        if (! ((strlen($parameters['surname'])) > 3 and (strlen($parameters['surname']) < 45))) {
            array_push($formErrors, "Check your surname.");
        }

        if(Validate::email($parameters['email'])) {
            array_push($formErrors, "Email already exist.");
        };

        if (! ((strlen($parameters['city'])) > 3 and (strlen($parameters['city']) < 45))) {
            array_push($formErrors, "Check your city.");
        }

        if (! ((strlen($parameters['password']) > 3) and (strlen($parameters['password']) < 45) and Validate::password($parameters['password']))) {
            array_push($formErrors, "Check your password.");
        }

        if (! ($formErrors == [])) {
            return  view('register', compact('formErrors'));
        }
    }

    public function create($parameters)
    {
        $sql = 'INSERT INTO
            users (
                name, surname, email, password, city, age, created_at)
            VALUES (
                :name, :surname, :email, :password, :city, :age, :created_at
                )';

        $parameters['password'] = password_hash($parameters['password'], PASSWORD_BCRYPT);

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function update($parameters)
    {
        $sql = "UPDATE users SET
                name = :name, surname = :surname, password = :password, city = :city, age = :age
            WHERE
                id = :id";

        $parameters['password'] = password_hash($parameters['password'], PASSWORD_BCRYPT);

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            $_SESSION['message'] = 'You have successfully updated your data.';
            $this->login(json_decode(json_encode($parameters)));
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id = :id LIMIT 1";

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute(['id' => $id]);
            User::logout();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function attempt($parameters)
    {
        $formErrors = [];

        try {
            if (isset(App::get('database')->getByEmail($parameters['email'])[0])) {
                $toVerify = App::get('database')->getByEmail($parameters['email'])[0];
                if (password_verify($parameters['password'], $toVerify->password)) {
                    $_SESSION['message'] = 'You have been successfully logged in.';
                    $this->login($toVerify);
                }
                else {
                    array_push($formErrors, 'Check your password.');
                    return view('login', compact('formErrors'));
                }
            }
            else {
                array_push($formErrors, 'Check your email.');
                return view('login', compact('formErrors'));
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }

    }

    protected function login($parameters)
    {
        $_SESSION['id'] = $parameters->id;
        $_SESSION['name'] = $parameters->name;
		$_SESSION['surname'] = $parameters->surname;
		$_SESSION['city'] = $parameters->city;
        $_SESSION['age'] = $parameters->age;

        if (isset($parameters->email)) {
            $_SESSION['email'] = $parameters->email;
        }
        if (isset($parameters->created_at)) {
            $_SESSION['created_at'] = $parameters->created_at;
        }

        return redirect('home');
    }

    public static function logout()
    {
        session_destroy();

        return redirect('login');
    }
}
