<?php

namespace App\InterfaceSegregationPrinciple\Wrong;

class AdvancePrinter implements IPrintMachine
{
    public function print(Document $d){
        echo "Print document";
    }
    public function scan(Document $d){
        echo "Scan document";
    }
    public function xerox(Document $d){
        echo "Take xerox copy of document";
    }
}