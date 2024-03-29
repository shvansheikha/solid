<?php

namespace App\LiskovSubstitutionPrinciple\Wrong;

class Rectangle
{
    protected $width;
    protected $height;
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function area()
    {
        return $this->height * $this->width;
    }
}