<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

//$store = new \Solid\two\DbStore();
$store = new \Solid\two\FileStore('data/store.json');
$repository = new \Solid\two\OrderRepository($store);
//$reporter = new \Solid\two\OrderReporter();

$order = new \Solid\two\Order();
$order->addProduct(new \Solid\two\Product('Phone', 1000, 2));
$order->addProduct(new \Solid\two\Product('Notebook', 5000, 4));

$repository->save($order);

$order2 = $repository->getOrder(2);

print_r($order2);

exit();