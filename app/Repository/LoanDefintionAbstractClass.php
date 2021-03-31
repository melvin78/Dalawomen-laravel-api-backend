<?php


namespace App\Repository;


use App\Models\Loans\LoansAccountModel;

abstract class LoanDefintionAbstractClass implements LoansDefinitionInterface
{


    /**
     * @var LoansAccountModel
     */
    private $loansAccountModel;


    public $loantype;


    public function __construct(LoansAccountModel $loansAccountModel)
    {


        $this->loansAccountModel = $loansAccountModel;
    }


    public function borrowLoan(array $attributes)
    {
        return $this->loansAccountModel->create($attributes)->loantype_id;

    }


abstract public function notify();

}
