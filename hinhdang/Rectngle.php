<?php
class Rectngle extends shape{
    public int $width;
    public int $height;

    public function __construct($name,$height,$width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea():int
    {
        return  $this->height * $this->width;
    }

    public function calculatePerimeter():float
    {
        return ($this->height+$this->width)*2;
    }

}