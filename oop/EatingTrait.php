<?php

trait EatingTrait
{
    public function eat($food)
    {
        // Сложная логику
        return 'I am eating ' . $food . PHP_EOL;
    }

    public function hello()
    {
        return 'Another trait method' . PHP_EOL;
    }
}