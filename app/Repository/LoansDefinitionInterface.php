<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Model;


interface LoansDefinitionInterface
{

    public function borrowLoan(array $attributes);


}
