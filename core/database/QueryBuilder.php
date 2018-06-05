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

    public function getBySurname($surname) {
        $statement = $this->pdo->prepare("select * from users where surname = :surname limit 1");
        $statement->execute(['surname' => $surname]);

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}
