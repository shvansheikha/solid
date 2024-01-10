<?php

namespace Tests;

use App\LiskovSubstitutionPrinciple\Rectangle;
use App\LiskovSubstitutionPrinciple\Square;
use PHPUnit\Framework\TestCase;

class LiskovTest extends TestCase
{
    public function testRectangleCalculateArea()
    {
        $shape = new Rectangle(10, 2);
        $this->assertEquals($shape->calculateArea(), 20);

        $shape = new Rectangle(5, 2);
        $this->assertEquals($shape->calculateArea(), 10);
    }

    public function testSquareCalculateArea()
    {
        $shape = new Square(10);
        $this->assertEquals($shape->calculateArea(), 100);

        $shape = new Square(5);
        $this->assertEquals($shape->calculateArea(), 25);
    }
}