<?php

namespace Solid\two;

class FileStore implements StoreInterface
{
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function store(array $data)
    {
        $content = file_exists($this->filename) ? file_get_contents($this->filename) : null;
        $items = $content ? json_decode($content, true) : [];
        $id = count($items) + 1;
        $items[$id] = $data;
        file_put_contents($this->filename, json_encode($items));
    }

    public function get($id): array
    {
        $content = file_exists($this->filename) ? file_get_contents($this->filename) : null;
        $items = $content ? json_decode($content, true) : [];
        if (array_key_exists($id, $items)) {
            $items[$id]['products'] = json_encode($items[$id]['products']);
            return $items[$id];
        }
        return [];
    }
}