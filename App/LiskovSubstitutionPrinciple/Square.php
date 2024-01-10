<?php

namespace App\LiskovSubstitutionPrinciple;

class Square implements CalculableArea
{
    protected int $edge;

    public function __construct(int $edge)
    {
        $this->edge = $edge;
    }

    public function calculateArea(): int
    {
        return $this->edge ** 2;
    }
}