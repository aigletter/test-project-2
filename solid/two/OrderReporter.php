<?php

namespace Solid\two;

class OrderReporter
{
    public function report(Order $order)
    {
        file_put_contents('data/order-report-' . $order->getId() . '.json', [
            'id' => $order->getId(),
            'products' => json_encode($order->getProducts())
        ]);
    }
}