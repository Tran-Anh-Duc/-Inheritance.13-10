<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle1 = new Circle1("circle",3,"blue");
echo "calculateArea Circle: ".$circle1->calculateArea()."<br>";
echo "calculatePerimeter Circle".$circle1->calculatePerimeter()."<br>";
echo $circle1->__toString();

$cylinder2 = new Cylinder2("Cylinder",3,"yellow",5);
echo "calculateArea cylinder: ".$cylinder2->calculateArea()."<br>";
echo "calculatePerimeter cylinder".$cylinder2->calculateVolume()."<br>";
echo $cylinder2->__toString();


