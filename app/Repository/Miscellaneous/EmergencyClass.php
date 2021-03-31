<?php


namespace App\Repository\Miscellaneous;


use App\Repository\Miscellaneous;
use App\Repository\PenaltyFees;

class EmergencyClass implements PenaltyFees,Miscellaneous
{

    public function checkPenaltyStatus($account_id, $user_id)
    {
        // TODO: Implement checkPenaltyStatus() method.
    }

    public function makePayment($account_id, $user_id)
    {
        // TODO: Implement makePayment() method.
    }
}
