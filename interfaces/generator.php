<?php

function test($filename)
{
    /*$cities = ['Киев', 'Виница', 'Хмельницкий', 'Суммы', 'Тернополь'];
    foreach ($cities as $city) {
        yield $city;
    }*/
    $f = fopen($filename, 'r+');
    while (!feof($f)) {
        yield fgetcsv($f);
    }
}

$generator = test('test');

foreach ($generator as $item) {
    echo $item . PHP_EOL;
}

exit();