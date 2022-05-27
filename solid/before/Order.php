<?php

namespace Solid\before;

class Order
{
    protected $id;

    /**
     * @var ProductInterface[]
     */
    protected $products;

    public function __construct(array $products = [])
    {
        $this->products = $products;
    }

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function getTotalSum()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->calculateSum();
        }
        return $sum;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function save()
    {
        $pdo = new \PDO('mysql:dbname=test_project;host=127.0.0.1', 'root', '1q2w3e');
        $pdo->query("INSERT INTO orders (products) VALUES ('" . json_encode($this->products) . "')");
    }

    public function report()
    {
        file_put_contents('data/order-report-' . $this->id . '.json', [
            'id' => $this->id,
            'products' => json_encode($this->products)
        ]);
    }
}