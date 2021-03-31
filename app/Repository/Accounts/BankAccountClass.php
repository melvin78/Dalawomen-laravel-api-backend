<?php


namespace App\Repository\Accounts;


use App\Models\Debits\BankAccountModels;

use Illuminate\Support\Facades\Auth;


class BankAccountClass
{


    public static function myBalance()
    {
        return BankAccountModels::where('member_id', Auth::id())->value('amount');
    }


}
