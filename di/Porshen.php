<?php

namespace Di;

class Porshen
{
    protected $klapan;

    public function __construct(Klapan $klapan)
    {
        $this->klapan = $klapan;
    }
}