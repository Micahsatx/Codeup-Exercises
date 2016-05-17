<?php

class Square extends Rectangle
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->height = $width;

    }

    public function perimeter()
    {
        $perimeter = ($this->height * 2) + ($this->width * 2);
        return $perimeter;
    }
}