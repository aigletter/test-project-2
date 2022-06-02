<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

//$store = new \Solid\two\DbStore();
$store = new \Solid\five\FileStore('data/store.json');
//$repository = new \Solid\five\OrderRepository($store);

$reporter = new \Solid\five\OrderReporter();

$order = new \Solid\five\Order();
$order->addProduct(new \Solid\five\Product('Phone', 1000, 2));
$order->addProduct(new \Solid\five\Product('Notebook', 5000, 4));


$repository = new \Solid\five\VirtualOrderRepository();
$manager = new \Solid\five\OrderManager($repository, $reporter);
$manager->run($order);

exit();