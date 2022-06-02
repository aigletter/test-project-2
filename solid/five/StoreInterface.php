<?php

namespace Solid\five;

interface StoreInterface
{
    public function store(array $data);

    public function get($id): array;
}