<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point =new Point(2,3);
 echo $point->__toString()."<br>";

 $moveablepoint = new MoveablePoint(4,5,6,7);
echo $moveablepoint->__tostring();