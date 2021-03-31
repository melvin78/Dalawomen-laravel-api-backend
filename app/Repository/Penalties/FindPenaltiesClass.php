<?php


namespace App\Repository\Penalties;

use App\Models\Loans\LoansAccountModel;
use App\Repository\PenaltiesInterface;
use Carbon\Carbon;

class FindPenaltiesClass implements PenaltiesInterface
{


    /**
     * @var LoansAccountModel
     */
    private $loansAccountModel;
    /**
     * @var Carbon
     */
    private $carbon;

    public function __construct(LoansAccountModel $loansAccountModel, Carbon $carbon)
    {


        $this->loansAccountModel = $loansAccountModel;
        $this->carbon = $carbon;
    }


    public function findLatePayments()///method to issue penalties on loans that havent been paid
    {
        return $this->loansAccountModel->select('loantype_id', 'member_id')
            ->where('payment_status', '=', 0)///loan hasnt been paid
            ->where('approval','=',1)///loan has been approved
            ->where('penalty_status','=',0)///loan hasnt been issued a penalty
            ->whereDate('paydate', '<', $this->carbon->now())///payment date has passed.
            ->get();


    }



}
