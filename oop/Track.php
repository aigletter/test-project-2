<?php

class Track extends Car
{
    public $weight;

    //protected static $county;

    public function sayWeight()
    {
        echo $this->weight . PHP_EOL;
    }

    public function sayHello()
    {
        parent::sayHello();
        echo 'Weight: ' . $this->weight . PHP_EOL;
        //echo 'I am a car ' . $this->brand . ' ' . $this->model . '. Year ' . $this->year . '. Weight: ' . $this->weight . PHP_EOL;
    }
}