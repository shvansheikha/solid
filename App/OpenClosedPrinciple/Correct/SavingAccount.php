<?php

namespace App\OpenClosedPrinciple\Correct;

class SavingAccount implements Account
{
    private $balance;
    private $rate = 3.0;
    private $maturityPeriod;

    public function setBalance($balance)
    {
    }

    public function getBalance()
    {
    }

    public function withdrawal()
    {
    }

    public function calculateInterest(): float|int
    {
        return $this->rate * $this->balance;
    }
}