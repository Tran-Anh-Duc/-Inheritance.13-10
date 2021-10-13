<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectngle.php";
include_once "Square.php";

$circle = new Circle("Circle",3);
echo "Cricle area ". $circle->calculateArea()."<br>";
echo "Cricle perimeter". $circle->calculatePerimeter()."<br>";

$cylinder = new Cylinder("Cylinder",3,4);
echo "Cylinder area".$cylinder->calculateArea()."<br>";
echo "Cylinder volum".$cylinder->calculateVolume()."<br>";

$rectangle = new Rectngle("Rectngle",3,4);
echo "Rectngle area; ".$rectangle->calculateArea()."<br>";
echo "Rectngle perimeter".$rectangle->calculatePerimeter()."<br>";

$square = new Square("Square" ,4);
echo "Square area: ".$square->squareQerimeter()."<br>";
echo "Square perimeter: ".$square->squareMetric();


