<?php

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator(
        __DIR__
    )
);
foreach ($iterator as $item) {
    if ($item->getFilename() === '.' || $item->getFilename() === '..') {
        continue;
    }
    echo $item->getPathname() . PHP_EOL;
}