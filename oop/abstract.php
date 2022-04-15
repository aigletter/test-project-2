<?php

include 'Animal.php';
include 'Cat.php';

$cat = new Cat(2, 'gray');
echo $cat->move();