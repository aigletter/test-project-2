<?php

$iterator = new DirectoryIterator(__DIR__);
foreach ($iterator as $item) {
    if ($item->isDot()) {
        continue;
    }
    if ($item->isDir()) {
        echo 'Directory: ';
    }
    echo $item->getPathname() . PHP_EOL;
}