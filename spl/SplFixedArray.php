<?php

$array = new SplFixedArray(2);
$array[0] = 'hello';
$array[1] = 'world';

foreach ($array as $item) {
    echo $item . PHP_EOL;
}