<?php

include 'Car.php';
include 'Track.php';

$car = new Track("Mersedes");
$car->weight = 1000;
$car->sayHello();
$car->sayWeight();