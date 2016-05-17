<?php

class Rectangle 
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    protected function setHeight($height)
    {
        $this->height = $height;
    }

    protected function setWidth($width)
    {
        $this->width = $width;
    }

    protected function getHeight()
    {
        return $this->height;
    }

    protected function getWidth()
    {
        return $this->width;
    }

    public function area()
    {
        return $this->height * $this->width;
    }

    public function perimeter()
    {
        return ($this->height * 2) + ($this->width * 2);
    }
}

// Update the Rectangle class from the previous lesson
//  to contain private properties for height and width.

// Before testing the Rectangle and Square classes,
//  try to think of the outcomes before executing. 
//  Will the Rectangle class work as before? What about the Square class?
//   Create objects from both classes and execute the area() method. 
//   Did the result meet your expected outcome?