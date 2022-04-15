<?php

include "MovableInterface.php";
include 'Animal.php';
include 'Cat.php';
include 'Fish.php';
include 'Bird.php';
include 'Man.php';

// ПОДСИСТЕМА. РАЗРАБОТАЛИ. ЗАБЫЛИ
function send(MovableInterface $movable)
{
    echo $movable->move() . PHP_EOL;
}



$animals = [
    new Cat(3, 'gray'),
    new Fish(1, 'red'),
    new Bird(3, 'green')
];

foreach ($animals as $animal) {
    send($animal);
}

$man = new Man();
send($man);