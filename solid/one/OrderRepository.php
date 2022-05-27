<?php

namespace Solid\one;

class OrderRepository
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:dbname=test_project;host=127.0.0.1', 'root', '1q2w3e');
    }

    public function save(Order $order)
    {
        $this->pdo->query("INSERT INTO orders (products) VALUES ('" . json_encode($order->getProducts()) . "')");
    }

    public function getOrder($id): Order
    {
        $data = $this->pdo->query("SELECT * FROM orders WHERE id = " . $id)->fetch(\PDO::FETCH_ASSOC);
        $order = new Order();
        $order->setId($data['id']);
        $products = json_decode($data['products'], true);
        foreach ($products as $item) {
            $product = new Product($item['name'], $item['price'], $item['amount']);
            $order->addProduct($product);
        }
        return $order;
    }
}