<?php


namespace App\Repository\Credits;


use App\Models\Loans\LoansTypeModel;

class LoanTypeIdentification
{
    public static function loantypeId($id)
    {

        $loan = new LoansTypeModel();

        return $loan->where('loantype', $id)->value('idloan_type');
    }
}
