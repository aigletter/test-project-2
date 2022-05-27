<?php

namespace Solid\one;

use JetBrains\PhpStorm\Internal\TentativeType;

class Product implements ProductInterface, \JsonSerializable
{
    protected $name;

    protected $price;

    protected $amount;

    public function __construct($name, $price, $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function calculateSum(): float
    {
        return $this->price * $this->amount;
    }


    public function jsonSerialize(): mixed
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'amount' => $this->amount
        ];
    }
}