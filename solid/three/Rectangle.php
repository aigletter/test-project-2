<?php

namespace Solid\three;

class Rectangle
{
    protected $height;

    protected $lenght;

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     * @return Rectangle
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLenght()
    {
        return $this->lenght;
    }

    /**
     * @param mixed $lenght
     * @return Rectangle
     */
    public function setLenght($lenght)
    {
        $this->lenght = $lenght;
        return $this;
    }

    public function calculateSquare()
    {
        return $this->lenght * $this->height;
    }
}