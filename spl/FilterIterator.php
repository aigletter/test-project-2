<?php

class FilterDotIterator extends FilterIterator
{
    public function accept(): bool
    {
        return $this->current()->getFilename() !== '.' && $this->current()->getFilename() !== '..';
    }
}

$iterator = new FilterDotIterator(
    new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(
            __DIR__
        )
    )
);
foreach ($iterator as $item) {
    echo $item->getPathname() . PHP_EOL;
}