<?php

class Square extends Rectngle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width,$width);
    }

    public function squareQerimeter()
    {
        return $this->width * 4;
    }

    public function squareMetric()
    {
        return $this->width * $this->width;
    }
}

