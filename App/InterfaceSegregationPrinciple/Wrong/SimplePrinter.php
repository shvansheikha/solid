<?php

namespace App\InterfaceSegregationPrinciple\Wrong;

class SimplePrinter implements IPrintMachine
{
    public function print(Document $d){
        echo "Print document";
    }
    public function scan(Document $d){
        echo "Not supported";
    }
    public function xerox(Document $d){
        echo "Not supported";
    }
}