<?php


namespace App\Repository\Miscellaneous;


use App\Repository\NotifyInterface;
use App\Repository\Miscellaneous;
use App\Repository\PenaltyFees;

class HostingFeeClass implements PenaltyFees,Miscellaneous
{


    public function makePayment($account_id, $user_id)
    {
        // TODO: Implement makePayment() method.
    }

    public function checkPenaltyStatus($account_id, $user_id)
    {
        // TODO: Implement checkPenaltyStatus() method.
    }
}