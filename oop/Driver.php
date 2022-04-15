<?php

class Driver
{
    public function drive(Car $car)
    {
        $car->move('Paris', 'phone');
    }
}