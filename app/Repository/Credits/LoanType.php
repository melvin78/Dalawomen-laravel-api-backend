<?php


namespace App\Repository\Credits;


use App\Models\Loans\LoansTypeModel;
use App\Models\User;

class LoanType
{
    public static function loantype($loantype_id)
    {
        $loan = new LoansTypeModel();

        return $loan->where('idloan_type', $loantype_id)->value('loantype');
    }
}
