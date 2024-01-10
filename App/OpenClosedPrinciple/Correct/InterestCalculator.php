<?php

namespace App\OpenClosedPrinciple\Correct;

class InterestCalculator
{
    public function calculate(Account $account)
    {
        return $account->calculateInterest();
    }
}