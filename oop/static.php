<?php

include 'Car.php';
include 'Track.php';

//$car = new Car('Toyota');

/*Car::$county = 'USA';
echo Car::$county . PHP_EOL;*/

Car::setCountry(Car::COUNTRY_USA);
Track::setCountry(Car::COUNTRY_CANADA);
//echo Car::getCountry() . PHP_EOL;

$car = new Car('BMW');
$car = new Car('Toyota');

//echo Car::COUNTRY_CANADA . PHP_EOL;

exit();