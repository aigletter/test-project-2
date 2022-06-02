<?php

namespace Solid\three;

interface ProductInterface
{
    public function calculateSum(): float;

    public function getWeight(): float;

    public function getAmount(): int;
}