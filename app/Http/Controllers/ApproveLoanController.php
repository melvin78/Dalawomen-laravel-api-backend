<?php

namespace App\Http\Controllers;

use App\Events\LoanHasBeenApprovedEvent;
use App\Http\Requests\LoanApprovalRequest;
use App\Models\User;
use App\Notifications\LoanHasBeenApprovedNotification;
use App\Repository\Credits\ApproveLoanInterface;
use App\Repository\Credits\CarbonHumans;
use App\Repository\Credits\LoanType;
use App\Repository\Credits\LoanTypeIdentification;
use App\Repository\Credits\MemberIdentification;
use App\Repository\Credits\MemberName;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;


class ApproveLoanController extends Controller
{
    /**
     * @var ApproveLoanInterface
     */
    private $approveLoan;

    public function __construct(ApproveLoanInterface $approveLoan)
    {

        $this->approveLoan = $approveLoan;
    }

    public function approve(LoanApprovalRequest $loanApprovalRequest)
    {


        $data=array();

        $val = $loanApprovalRequest->validated();

        $res = $this->approveLoan->approveLoan($val);

        foreach ($res as $v) {
            $details['members'] = MemberName::memberid($v['member_id']);
            $details['loans'] = LoanType::loantype($v['loantype_id']);
            $details['date']=Carbon::parse($v['loantaken_date']);
            $details['amount']=$v['amount'];

            array_push($data,$details);

        }



        event(new LoanHasBeenApprovedEvent($data));

        Notification::send(User::all(),new LoanHasBeenApprovedNotification($data));


        return response()->json([
            'data' => $data
        ], 201);


    }
}
