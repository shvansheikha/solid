<?php

namespace App\LiskovSubstitutionPrinciple\Correct;

class Square implements CalculableArea
{
    protected int $width;

    public function __construct(int $width)
    {
        $this->width = $width;
    }

    public function calculateArea(): int
    {
        return $this->width * $this->width;
    }
}