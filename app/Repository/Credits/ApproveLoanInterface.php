<?php

namespace App\Repository\Credits;

interface ApproveLoanInterface
{
    public function approveLoan(array $loan_details);
}
