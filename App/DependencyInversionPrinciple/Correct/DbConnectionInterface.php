<?php

namespace App\DependencyInversionPrinciple\Correct;

interface DbConnectionInterface
{
    public function connect();
}