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
        return $this->getHeight() * $this->getWidth();
    }

    public function perimeter()
    {
        return ($this->getHeight() * 2) + ($this->getWidth() * 2);
    }
}
