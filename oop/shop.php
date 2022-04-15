<?php

include 'Shop/Order.php';
include 'Collection/Order.php';

use Company\Aigletter\Collection\VeryLongSomeName\Blablalba\Cart\Order;
use Shop\Cart\Something\Order as CollectionOrder;

$order = new CollectionOrder();
$sort = new Order();

exit();