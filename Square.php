<?php

require_once ('Rectangle.php');

class Square extends Rectangle
{
    public function __construct($height)
    {
    
    parent::__construct($height, $height);

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
