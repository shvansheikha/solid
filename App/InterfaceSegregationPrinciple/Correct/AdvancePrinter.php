<?php

namespace App\InterfaceSegregationPrinciple\Correct;

class AdvancePrinter implements IPrinter,IScanner,IXerox
{
    public function print(Document $d){
        echo "Print document";
    }
    public function scan(Document $d){
        echo "Sacn document";
    }
    public function xerox(Document $d){
        echo "Take xerox copy of document";
    }
}