<?php

class Something extends Track
{
    public function move($to, $cargo)
    {
        echo 'Я очень странный something ' . PHP_EOL;
        echo 'Я умею перевозить груз ' . $cargo . PHP_EOL;
        echo 'Еду в ' . $to . PHP_EOL;
    }
}