<?php

//include 'Cat.php';

function myAutoloader($className)
{
    echo 'Обратились к неизвестному классу ' . $className . PHP_EOL;
    $filename = __DIR__ . '/' . $className . '.php';
    //echo $filename . PHP_EOL;
    if (file_exists($filename)) {
        include $filename;
    }
}

function shopAutoloader($className)
{
    echo 'Обратились к классу с Shop' . PHP_EOL;
    $segments = explode('\\', $className);
    $filename = __DIR__ . '/Shop/' . $segments[count($segments) - 1] . '.php';
    if (file_exists($filename)) {
        include $filename;
    }
}

spl_autoload_register('myAutoloader');
spl_autoload_register('shopAutoloader');


$cat = new Cat(2, 'grey');
echo $cat->move();

$man = new Man();
echo $man->move();

$order = new \Shop\Cart\Something\Order();
$order->addProduct();

