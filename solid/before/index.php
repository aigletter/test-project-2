<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

$order = new \Solid\before\Order();
$order->addProduct(new \Solid\before\Product('Phone', 1000, 2));
$order->addProduct(new \Solid\before\Product('Notebook', 5000, 4));

$order->save();
$order->report();

exit();