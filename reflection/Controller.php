<?php

namespace Reflection;

class Controller implements TestInterface
{
    private string $name;

    private Engine $engine;

    private int $age;

    protected static $hello;

    public const BLA = 'blablabla';

    public function __construct(string $name, Engine $engine, int $age)
    {
        $this->name = $name;
        $this->engine = $engine;
        $this->age = $age;
    }

    public function test1(int $a = 100): float
    {
        return $a / 100;
    }

    public function test2(string $name, float $price): string
    {
        return $name . '-' . $price;
    }
}