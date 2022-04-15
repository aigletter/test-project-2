<?php

include 'Car.php';

// ....

$car1 = new Car('Toyota', 'Corolla', 2021);
//$car1->brand = 'Toyota';
//$car1->model = 'Corolla';
//$car1->year = 2021;


$car2 = new Car('Ford');
//$car2->brand = 'Ford';
$car2->model = 'Focus';
$car2->year = 2020;


$car1->sayHello();
$car2->sayHello();

$car1->blablabla = 'Hello world';
echo $car1->blablabla . PHP_EOL;


echo $car1->foo(1, 'hello') . PHP_EOL;




/*$car2 = new Car();
$car2->brand = 'Toyota';

//unset($car1);

echo $car2->brand . PHP_EOL;



$result = $car1 == $car2;

var_dump($result);*/


/*function foo(&$a)
{
    $a++;
}

$a = 1;
foo($a);

echo $a . PHP_EOL;*/