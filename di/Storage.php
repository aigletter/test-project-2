<?php

namespace Di;

class Storage
{
    protected $items = [
        [
            'id' => 1,
            'name' => 'John',
            'age' => 44,
        ],
        [
            'id' => 2,
            'name' => 'Ivan',
            'age' => 32,
        ]
    ];

    public function getItemsDirect()
    {
        return $this->items;
    }

    public function getItemsCallback(callable $callback)
    {
        $items = $this->getItemsDirect();
        foreach ($items as $key => $item) {
            $items[$key] = $callback($item);
        }

        return $items;
    }
}