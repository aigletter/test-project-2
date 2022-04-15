<?php

include 'SomeTrait.php';
include 'EatingTrait.php';
include 'LivingAbstract.php';
include 'MovableInterface.php';
include 'Animal.php';
include 'Cat.php';
include 'Man.php';


/*function doSomething($anything)
{
    echo $anything->eat('Food');
    $anything->hello();
}

$cat = new Cat(2, 'grey');
$man = new Man();

doSomething($cat);
doSomething($man);*/

$cat = new Cat(2, 'grey');
$cat->setName('John');
echo $cat->hello();
echo $cat->someTraitHello();

exit();