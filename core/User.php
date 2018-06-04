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
        if (! ((strlen($parameters['name'])) > 3 and (strlen($parameters['name']) < 45))) {
            throw new \Exception("Check your name.");
        }

        if (! ((strlen($parameters['surname'])) > 3 and (strlen($parameters['surname']) < 45))) {
            throw new \Exception("Check your surname.");
        }

        if (! ((strlen($parameters['city'])) > 3 and (strlen($parameters['city']) < 45))) {
            throw new \Exception("Check your city.");
        }

        if (! ((strlen($parameters['password']) > 3) and (strlen($parameters['password']) < 45) and validatePassword($parameters['password']))) {
            throw new \Exception("Check your password.");
        }
    }

    public function create($parameters)
    {
        $sql = 'insert into
            users (
                name, surname, password, city, age, created_at)
            values (
                :name, :surname, :password, :city, :age, :created_at
                )';

        $parameters['password'] = password_hash($parameters['password'], PASSWORD_BCRYPT);

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function attempt($parameters)
    {
        try {
            if ($toVerify = App::get('database')->getBySurname($parameters['surname'])[0]) {
                if (password_verify($parameters['password'], $toVerify->password)) {
                    $this->login($toVerify);
                }
                dd($toVerify->password);
            }
            dd('Bad');
        } catch (PDOException $e) {
            die($e->getMessage());
        }

    }

    protected function login($parameters)
    {
        $_SESSION['id'] = $parameters->id;
        $_SESSION['name'] = $parameters->name;
		$_SESSION['surname'] = $parameters->surname;
		$_SESSION['password'] = $parameters->password;
		$_SESSION['city'] = $parameters->city;
        $_SESSION['age'] = $parameters->age;
        $_SESSION['created_at'] = $parameters->created_at;

        redirect('');
    }

    public static function logout()
    {
        session_destroy();

        redirect('');
    }
}