<?php

include 'Car.php';
include 'Track.php';
include 'Something.php';

// Подсистема отправки грузов автомобилями
function sendCar(Car $car)
{
    // TODO
    $cargo = 'Notebooks';
    $to = 'New York';

    $car->move($to, $cargo);
}

//$car = new Car('Renault');
$car = new Something('Mersedes');
sendCar($car);