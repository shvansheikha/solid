<?php

namespace App\InterfaceSegregationPrinciple\Correct;

class SimplePrinter implements IPrinter
{
    public function print(Document $d)
    {
        echo "Print document";
    }
}
