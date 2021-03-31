<?php


namespace App\Repository\Accounts;


use App\Models\Credits\PenaltiesModel;
use Illuminate\Support\Facades\Auth;

class PenaltiesAccount
{



    public static function myBalance()
    {
        return PenaltiesModel::where('member_id', Auth::id())->value('amount');
    }


}
