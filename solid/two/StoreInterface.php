<?php

namespace Solid\two;

interface StoreInterface
{
    public function store(array $data);

    public function get($id): array;
}