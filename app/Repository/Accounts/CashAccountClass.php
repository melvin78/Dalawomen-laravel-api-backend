<?php


namespace App\Repository\Accounts;



use App\Models\Debits\CashAccountModel;

use Illuminate\Support\Facades\Auth;

class CashAccountClass
{




    public static function myBalance()
    {
        return CashAccountModel::where('member_id', Auth::id())->value('amount');
    }


}
