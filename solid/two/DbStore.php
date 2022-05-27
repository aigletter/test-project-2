<?php

namespace Solid\two;

class DbStore implements StoreInterface
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:dbname=test_project;host=127.0.0.1', 'root', '1q2w3e');
    }

    public function store(array $data)
    {
        $this->pdo->query("INSERT INTO orders (products) VALUES ('" . json_encode($data['products']) . "')");
    }

    public function get($id): array
    {
        return $this->pdo->query("SELECT * FROM orders WHERE id = " . $id)->fetch(\PDO::FETCH_ASSOC);
    }
}