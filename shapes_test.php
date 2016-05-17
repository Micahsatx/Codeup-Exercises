<?php

require_once ('Rectangle.php');
require_once ('Square.php');

$Rectangle = new Rectangle('12', '9');
echo "The rectangles area is: " . $Rectangle->area() . PHP_EOL;


$Square = new Square('4', '4');
echo "The squares perimeter is: " . $Square->perimeter() . PHP_EOL;