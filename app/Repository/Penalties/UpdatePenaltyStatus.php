<?php


namespace App\Repository\Penalties;


use App\Models\Loans\LoansAccountModel;
use Carbon\Carbon;

class UpdatePenaltyStatus implements UpdatePenaltyStatusInterface
{

    /**
     * @var LoansAccountModel
     */
    private $loansAccountModel;
    /**
     * @var Carbon
     */
    private $carbon;

    public function __construct(LoansAccountModel $loansAccountModel,Carbon $carbon)
    {

        $this->loansAccountModel = $loansAccountModel;
        $this->carbon = $carbon;
    }


    public function updatePenaltyStatus(){


       return $this->loansAccountModel
            ->whereDate('paydate','<',$this->carbon->now())///
            ->where('payment_status','=',0)
            ->where('approval','=',1)
            ->update([
               'penalty_status'=>1
            ]);
    }
}
