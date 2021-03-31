<?php


namespace App\Repository\Credits;


use App\Models\Loans\LoansAccountModel;
use App\Models\Loans\LoansTypeModel;
use App\Models\User;
use App\Repository\CreditsInterface;
use App\Repository\LoanDefintionAbstractClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class CooperativeLoanClass extends LoanDefintionAbstractClass implements CreditsInterface
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var LoansTypeModel
     */
    private $loansTypeModel;




    public function __construct(LoansAccountModel $loansAccountModel, LoansTypeModel $loansTypeModel, User $user)
{
    parent::__construct($loansAccountModel);
    $this->user = $user;
    $this->loansTypeModel = $loansTypeModel;

}

    public function getLoantypeid($loantype_id)
    {

        return $this->loansTypeModel->where('loantype',$loantype_id)->value('idloan_type');
    }

//    public function getMemberid($member_id): Model
//    {
//        return $this->user->where('',$member_id)->value('idloan_type');
//
//
//    }

    public function getAmount($amount)
    {
        return $amount;
    }

    public function requestCredit($loantype_id,$amount)
    {
         $this->borrowLoan([
            'loantype_id' => $this->getLoantypeid($loantype_id),
            'member_id' => Auth::id(),
            'amount' => $this->getAmount($amount)
        ]);


    }


    public function notify()
    {
        // TODO: Implement notify() method.
    }
}
