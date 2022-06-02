<?php

namespace Solid\four;

interface OrderInterface
{
    public function addProduct(ProductInterface $product);
}