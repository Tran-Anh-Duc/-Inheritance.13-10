<?php
include_once "TwoD.php";
include_once "ThreeD.php";

$twod= new TwoD(2,5);
echo $twod->__toString()."<br>";

$three= new ThreeD(3,4,6);
echo $three->__toString();
