<?php


namespace App\Repository\Accounts;


use App\Repository\AccountsInterface;

class AllLoansAccountsClass implements AccountsInterface
{


    public function allBalances()
    {
        $bank = BankAccountClass::myBalance();
        $cash = CashAccountClass::myBalance();
        $wef = WomenEnterpriseFund::myBalance();
        $welfare = WelfareAccount::myBalance();
        $emergency = EmergencyAccount::myBalance();
        $cop = CooperativeLoan::myBalance();

        return array(
            'bank' => $bank,
            'cash' => $cash,
            'women' => $wef,
            'welfare' => $welfare,
            'emergency' => $emergency,
            'cop'=>$cop);


    }

    public function makePayment($amount)
    {

    }

    public function reconcile()
    {

    }

    public function withdraw($amount)
    {

    }
}
