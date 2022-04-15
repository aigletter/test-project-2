<?php

include "Engine.php";
include "Car.php";

$engine = new Engine();
$car = new Car($engine, 'BMW');

var_dump($car);

unset($car);

$car2 = new Car($engine, 'Mercedes');

// Here

exit();