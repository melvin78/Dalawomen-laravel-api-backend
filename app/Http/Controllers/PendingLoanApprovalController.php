<?php

namespace App\Http\Controllers;

use App\Http\Resources\PendingLoanApprovalCollection;

use App\Models\PendingLoanApproval;
use Illuminate\Http\Request;

class PendingLoanApprovalController extends Controller
{

    public function pendingLoans(){



        return new  PendingLoanApprovalCollection(PendingLoanApproval::paginate(20));
    }
}
