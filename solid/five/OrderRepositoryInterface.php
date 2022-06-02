<?php

namespace Solid\five;

interface OrderRepositoryInterface
{
    public function saveOrder(Order $order);

    public function getOrder($id): Order;
}