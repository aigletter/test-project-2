<?php

namespace Solid\four;

class Order implements OrderInterface, CalculateShippingInterface
{
    /**
     * @var ProductInterface[]
     */
    protected $products;

    public function addProduct(ProductInterface $product)
    {
        $this->products[] = $product;
    }

    public function calculateShippingPrice(): float
    {
        $weight = 0;
        foreach ($this->products as $product) {
            $weight += $product->getWeight() * $product->getAmount();
        }
        return $weight * 0.25;
    }
}