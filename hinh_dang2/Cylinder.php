<?php
class Cylinder2 extends Circle1 {
 public int $height;


 public function __construct($name, float $radius,$color,$height)
 {
     parent::__construct($name, $radius,$color);
     $this->height= $height;
 }

    public function calculateArea(): float
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter()* $this->height ; // TODO: Change the autogenerated stub
    }

    public function calculateVolume(): float
    {
        return parent::calculateArea() * $this->height;
    }

    public function __toString():string
    {
        $str = "properties".$this->name."<br>".$this->radius."<br>".$this->color."<br>".$this->height;
        return $str;
    }


}
