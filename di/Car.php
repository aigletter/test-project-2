<?php

namespace Di;

class Car
{
    protected $engine;

    protected $transmission;

    public function __construct(Engine $engine, Transmission $transmission)
    {
        $this->engine = $engine;
        $this->transmission = $transmission;
    }

    public function setEngine(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function carryCargo(Trailer $trailer, $a, $b, $cargo)
    {
        $trailer->up($cargo);

        echo 'Carry ' . $cargo . ' from ' . $a . ' to ' . $b . PHP_EOL;
    }
}