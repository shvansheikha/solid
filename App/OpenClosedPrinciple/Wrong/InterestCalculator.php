<?php

namespace App\OpenClosedPrinciple\Wrong;

use Exception;

class InterestCalculator
{
    public function calculate($account)
    {
        if ($account instanceof SavingAccount) {
            return $account->getBalance() * 3.0;
        } elseif ($account instanceof FixedDepositAccount) {
            return $account->getBalance() * 9.5;
        }
        throw new Exception('Invalid input member');
    }
}