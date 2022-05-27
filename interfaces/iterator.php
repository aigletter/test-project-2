<?php

class CityCollection implements Iterator, ArrayAccess
{
    protected $cities;

    protected $pointer;

    public function __construct($cities = [])
    {
        $this->cities = $cities;
    }

    public function add($city)
    {
        $this->cities[] = $city;
    }

    public function current(): mixed
    {
        return $this->cities[$this->pointer];
    }

    public function next(): void
    {
        $this->pointer++;
    }

    public function key(): mixed
    {
       return $this->pointer;
    }

    public function valid(): bool
    {
        return isset($this->cities[$this->pointer]);
    }

    public function rewind(): void
    {
        $this->pointer = 0;
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->cities[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->cities[$offset];
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if ($offset === null) {
            $offset = count($this->cities);
        }
        $this->cities[$offset] = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->cities[$offset]);
    }
}

$iterator = new CityCollection(['Киев', 'Виница', 'Хмельницкий', 'Суммы', 'Тернополь']);
$iterator->add('New York');

unset($iterator[2]);

foreach ($iterator as $key => $city) {
    echo $city . PHP_EOL;
}

/*$iterator[] = 'Boston';
if (isset($iterator[4])) {
    echo $iterator[4];
    unset($iterator[4]);
}*/

/*$array = [1, 2 ,3];
foreach ($array as $item) {

}*/

exit();