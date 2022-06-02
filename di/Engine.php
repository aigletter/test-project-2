<?php

namespace Di;

class Engine
{
    protected $porshen;

    public function __construct(Porshen $porshen)
    {
        $this->porshen = $porshen;
    }
}