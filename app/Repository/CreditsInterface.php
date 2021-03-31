<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Model;

interface CreditsInterface
{

   public function requestCredit($loantype_id,$amount);

//    public function getLoanid();

}
