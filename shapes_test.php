<?php

require_once ('Square.php');


$SquareOne = new Square(4);
echo "The squares perimeter is: " . $SquareOne->perimeter() . PHP_EOL;
echo "The squares area is: " . $SquareOne->area() . PHP_EOL;


$RectangleOne = new Rectangle(12, 9);
echo "The rectangles area is: " . $RectangleOne->area() . PHP_EOL;
echo "The rectangles perimeter is: " . $RectangleOne->perimeter() . PHP_EOL;



$SquareTwo = new Square(10);
echo "The squares perimeter is: " . $SquareTwo->perimeter() . PHP_EOL;
echo "The squares area is: " . $SquareTwo->area() . PHP_EOL;


$RectangleTwo = new Rectangle(1, 3);
echo "The rectangles area is: " . $RectangleTwo->area() . PHP_EOL;
echo "The rectangles perimeter is: " . $RectangleTwo->perimeter() . PHP_EOL;
