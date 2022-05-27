<?php

$stack = new SplStack();
$stack->push(3);
$stack->push(5);
$stack->push(1);

/*while (!$stack->isEmpty()) {
    echo $stack->pop() . PHP_EOL;
}*/

foreach ($stack as $item) {
    echo $item . PHP_EOL;
}