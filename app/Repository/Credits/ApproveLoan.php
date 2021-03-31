<?php


namespace App\Repository\Credits;


use App\Models\Loans\LoansAccountModel;
use Carbon\Carbon;

class ApproveLoan implements ApproveLoanInterface
{


    /**
     * @var LoansAccountModel
     */
    private $loansAccountModel;
    /**
     * @var array
     */
    public $loans_array;


    /**
     * ApproveLoan constructor.
     * @param LoansAccountModel $loansAccountModel
     * @param array $loans_array
     */
    public function __construct(LoansAccountModel $loansAccountModel, $loans_array = array())
    {


        $this->loansAccountModel = $loansAccountModel;

        $this->loans_array = $loans_array;
    }

    public function approveLoan(array $loan_details)
    {


        foreach ($loan_details['data'] as $detail) {

            $m = tap($this->loansAccountModel
                ->where('loantype_id', LoanTypeIdentification::loantypeId($detail['type_of_loan']))
                ->where('created_at', $detail['date_borrowed'])
                ->where('amount', $detail['amount'])
                ->where('member_id', MemberIdentification::memberid($detail['member_name'])))
                ->update([
                    'approval' => 1,
                    'loantaken_date' => Carbon::now()])->first();
            $this->loans_array[] = $m->toArray();


        }

        return $this->loans_array;

    }


}
