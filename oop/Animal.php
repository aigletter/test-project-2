<?php

abstract class Animal implements MovableInterface
{
    use EatingTrait, SomeTrait {
        EatingTrait::hello insteadof SomeTrait;
        SomeTrait::hello as someTraitHello;
    }

    protected $name;

    protected $age;

    protected $color;

    public function __construct($age, $color, $name = null)
    {
        $this->age = $age;
        $this->color = $color;
        $this->name = $name;
    }



    //abstract public function move();
}