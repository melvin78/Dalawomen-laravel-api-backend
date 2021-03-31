<?php


namespace App\Traits;


use App\Events\LoanHasBeenApprovedEvent;
use App\Models\Loans\LoansAccountModel;

trait UpdateLoanApprovalDate
{

    public static function bootUpdateLoanApprovalDate()
    {
        static::updated(function (LoansAccountModel $accountModel) {

        });

    }


}
