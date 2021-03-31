<?php


namespace App\Repository\Accounts;



use App\Models\Loans\EmergencyModelAccount;
use App\Models\Loans\LoansAccountModel;
use App\Models\Loans\WefModel;
use Illuminate\Support\Facades\Auth;

class WomenEnterpriseFund
{

    public static function myBalance()
    {
        $r=0;
        $em = LoansAccountModel::select('amount','created_at')
            ->where('member_id',Auth::id())
            ->where('loantype_id',2)
            ->where('approval',1)
            ->get();

        $t=$em->toArray();
        foreach ($t as $value){
            $r+=$value['amount'];

        }

        return $r;
    }


}
