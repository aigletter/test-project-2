<?php

class DivisionByZeroException extends Exception
{
    protected $message = 'На ноль делить нельзя';

    protected $a;

    protected $b;

    public function __construct($a, $b, string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct($message, $code, $previous);
    }

    public function getA()
    {
        return $this->a;
    }
}