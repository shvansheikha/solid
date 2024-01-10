<?php

namespace App\OpenClosedPrinciple\Correct;

class FixedDepositAccount implements Account
{
    private $balance;
    private $rate = 9.5;

    public function setBalance($balance)
    {
    }

    public function getBalance()
    {
    }

    public function calculateInterest()
    {
        return $this->rate * $this->balance;
    }
}