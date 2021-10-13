<?php
class MoveablePoint extends Point{
    public float $xSpeed;
    public float $ySpeed;

    public function __construct(float $x, float $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }


    public function getXSpeed(): float
    {
        return $this->xSpeed;
    }


    public function setXSpeed(float $xSpeed): void
    {
        $this->xSpeed = $xSpeed;
    }


    public function getYSpeed(): float
    {
        return $this->ySpeed;
    }


    public function setYSpeed(float $ySpeed): void
    {
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed():array
    {
        return [$this->xSpeed,$this->ySpeed];
    }

    public function __toString()
    {
        $str = "MoveablePoint: ".$this->xSpeed." ".$this->ySpeed." ".$this->x." ".$this->y;
        return $str;
    }


}
