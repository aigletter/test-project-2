<?php

namespace Solid\five;

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

    public function setId($id)
    {
        $this->id = $id;
    }
}