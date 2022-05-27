<?php

$heap = new SplMinHeap();
$heap->insert(3);
$heap->insert(5);
$heap->insert(1);

while (!$heap->isEmpty()) {
    echo $heap->extract() . PHP_EOL;
}