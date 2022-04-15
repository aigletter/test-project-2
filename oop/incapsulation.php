<?php

include 'Car.php';
include 'Track.php';

function foo(Car $car)
{
   if ($car->getModel() == 'BMW') {
        $car->setBrand('Toyota');
   }
}





$car = new Car('BMW');
simpleFunction($car);


echo $car->getBrand() . PHP_EOL;
echo $car->getModel() . PHP_EOL;