<?php

//$heap = new SplPriorityQueue();
$heap = new SplMaxHeap();
$heap->insert(3);
$heap->insert('Hello');
$heap->insert([]);

while (!$heap->isEmpty()) {
    print_r($heap->extract() . PHP_EOL);
}

/*$a = 'a';
$b = 'aAAAAAAA';
$c = $a > $b;*/

//$res = false == [];

//var_dump($res);