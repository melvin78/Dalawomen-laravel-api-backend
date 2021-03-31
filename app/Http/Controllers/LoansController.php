<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequest;
use App\Repository\CreditsInterface;

class LoansController extends Controller
{
    /**
     * @var CreditsInterface
     */
    private $credits;

    public function __construct(CreditsInterface $credits)
    {

        $this->credits = $credits;
    }

    public function borrowLoan(LoanRequest $loanRequest)
    {
        $loan_details = $loanRequest->validated();

      $this->credits->requestCredit($loan_details['loantype_id'], $loan_details['amount']);


      return
           response()->json([
                'data' => 'Your Loan request has been accepted. Once accepted you will receive an email notification '
            ], 201);



    }
}
