<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

$repository = new \Solid\one\OrderRepository();
$reporter = new \Solid\one\OrderReporter();


$order = new \Solid\one\Order();
$order->addProduct(new \Solid\one\Product('Phone', 1000, 2));
$order->addProduct(new \Solid\one\Product('Notebook', 5000, 4));

$order2 = $repository->getOrder(2);


/*
$repository->save($order);

$reporter->report($order);*/

exit();