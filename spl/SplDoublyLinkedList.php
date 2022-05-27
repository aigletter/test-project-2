<?php

$list = new SplDoublyLinkedList();
$list->push(3);
$list->push(5);
$list->push(1);

echo $list->count() . PHP_EOL;
echo $list->top() . PHP_EOL;
echo $list->bottom() . PHP_EOL;

echo '--------' . PHP_EOL;

/*foreach ($list as $item) {
    echo $item . PHP_EOL;
}*/

/*$counter = 0;
$list->rewind();
while ($counter < $list->count())
{
    echo $list->current() . PHP_EOL;
    $counter++;
}*/

while (!$list->isEmpty()) {
    echo $list->pop() . PHP_EOL;
}

//$list->pop() . PHP_EOL;