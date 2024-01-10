<?php

namespace App\InterfaceSegregationPrinciple\Wrong;

interface IPrintMachine
{
    public function print(Document $d);
    public function scan(Document $d);
    public function xerox(Document $d);
}