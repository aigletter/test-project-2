<?php

trait SomeTrait
{
    protected $name;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        return 'Hello world. My name is ' . $this->name . PHP_EOL;
    }
}