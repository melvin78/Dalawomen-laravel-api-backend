<?php


namespace App\Repository\Debits;


use App\Repository\NotifyInterface;
use App\Repository\PenaltiesDefintionInterface;
use App\Repository\PenaltyFees;

class WomenEnterpriseFundClass implements PenaltiesDefintionInterface,PenaltyFees

{


    public function borrowLoan($account_id, $user_id)
    {
        // TODO: Implement borrowLoan() method.
    }

    public function checkBalance($account_id, $user_id)
    {
        // TODO: Implement checkBalance() method.
    }

    public function makePayment($account_id, $user_id)
    {
        // TODO: Implement makePayment() method.
    }

    public function checkPenaltyStatus($account_id, $user_id)
    {
        // TODO: Implement checkPenaltyStatus() method.
    }
}
