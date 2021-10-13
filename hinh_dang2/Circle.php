<?php
class Circle1{
    public string $name;
    public float $radius;
    public string $color;


    public function __construct($name, $radius,$color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }


    public function getColor(): string
    {
        return $this->color;
    }


    public function setColor(string $color): void
    {
        $this->color = $color;
    }


    public function calculateArea(): float
    {
        return number_format(pi() * pow($this->radius, 2),2);
    }

    public function calculatePerimeter(): float
    {
        return number_format((pi() * $this->radius * 2),2);
    }

    public function __toString():string
    {
       $str = "properties".$this->name."<br>".$this->radius."<br>".$this->color;
       return $str;
    }


}
