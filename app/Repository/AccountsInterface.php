<?php


namespace App\Repository;


interface AccountsInterface
{

    public function allBalances();

    public function makePayment($amount);


    public function reconcile();

    public function withdraw($amount);

}
