<?php

class CityCollection extends ArrayIterator
{
    public function addCity($city)
    {
        $this[] = $city;
    }

    public function doSomething()
    {
        return array_filter($this->getArrayCopy(), function ($city) {
            return preg_match('/ь$/', $city);
        });
    }
}

$array = ['Киев', 'Виница', 'Хмельницкий', 'Суммы', 'Тернополь'];
$iterator = new CityCollection($array);

$iterator[] = 'New York';
$iterator->addCity('Boston');

foreach ($iterator as $item) {
    echo $item . PHP_EOL;
}

echo '-------' . PHP_EOL;

echo $iterator[2] . PHP_EOL;

echo 'Count: ' . $iterator->count() . PHP_EOL;

$cities = $iterator->doSomething();

exit();