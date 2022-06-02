<?php

namespace Solid\three;

class VirtualOrder extends Order
{
    public function calculateShippingPrice()
    {
        //throw new \Exception('Не вызываейте данный метод, потому что для виртуальных продуктов он не работает');
        return 0;
    }
}