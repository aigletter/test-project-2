<?php

namespace Solid\four;

interface ProductInterface
{
    public function getWeight(): float;

    public function getAmount(): int;
}