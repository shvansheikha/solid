<?php

namespace App\LiskovSubstitutionPrinciple\Correct;

class Rectangle implements CalculableArea
{
    protected int $width;
    protected int $height;

    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): int
    {
        return $this->width * $this->height;
    }
}