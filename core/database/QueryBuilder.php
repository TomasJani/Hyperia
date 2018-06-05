<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getByEmail($email) {
        $statement = $this->pdo->prepare("select * from users where email = :email limit 1");
        $statement->execute(['email' => $email]);

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getById($id) {
        $statement = $this->pdo->prepare("select * from users where id = :id limit 1");
        $statement->execute(['id' => $id]);

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
