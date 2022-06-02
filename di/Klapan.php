<?php

namespace Di;

class Klapan
{
    protected $something;

    public function __construct(Something $something)
    {
        $this->something = $something;
    }
}