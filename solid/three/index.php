<?php

include __DIR__ . '/../../vendor/autoload.php';

function orderManager(\Solid\three\Order $order)
{
    foreach ($order->getProducts() as $product) {
        echo 'Amount: ' . $product->getAmount() . PHP_EOL;
        echo 'Weight: ' . $product->getWeight() . PHP_EOL;
    }

    $shipping = $order->calculateShippingPrice();
    // TODO Много кода
    echo $shipping . PHP_EOL;

    /*if (!$order instanceof \patterns\AbstractFactory\VirtualProduct) {
        $shipping = $order->calculateShippingPrice();
        // TODO Много кода
        echo $shipping . PHP_EOL;
    }*/

}

/*$order = new \Solid\three\Order();
$order->addProduct(new \Solid\three\Product('Phone', 2222, 2));
$order->addProduct(new \Solid\three\Product('Notebook', 10000, 1));*/

$order = new \Solid\three\VirtualOrder();
$order->addProduct(new \Solid\three\Product('Phone', 2222, 2));
$order->addProduct(new \Solid\three\Product('Notebook', 10000, 1));

orderManager($order);




function todo(\Solid\three\Rectangle $rectangle, $a, $b)
{
    $rectangle->setLenght($a);
    $rectangle->setHeight($b);
    $calculate = $rectangle->calculateSquare();

    if ($calculate !== $a * $b) {
        throw new Exception('Произошла ошибка');
    }
}

$a = 5;
$b = 4;

//$rectangle = new \Solid\three\Rectangle();
$rectangle = new \Solid\three\Square();

todo($rectangle, $a, $b);