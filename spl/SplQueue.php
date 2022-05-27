<?php

$queue = new SplQueue();
$queue->enqueue(3);
$queue->enqueue(5);
$queue->enqueue(1);

/*while (!$queue->isEmpty()) {
    echo $queue->dequeue() . PHP_EOL;
}*/

//$queue->dequeue() . PHP_EOL;

foreach ($queue as $item) {
    echo $item . PHP_EOL;
}