<?php

class Man implements MovableInterface
{
    //use EatingTrait;

    //use SomeTrait;

    public function move()
    {
        return 'Я человек и я хожу на 2 ногах' . PHP_EOL;
    }
}