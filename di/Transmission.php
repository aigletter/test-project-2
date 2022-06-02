<?php

namespace Di;

class Transmission
{
    protected $anything;

    public function __construct(Anything $anything)
    {
        $this->anything = $anything;
    }
}