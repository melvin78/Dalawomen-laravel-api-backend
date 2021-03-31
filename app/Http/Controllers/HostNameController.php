<?php

namespace App\Http\Controllers;

use App\Models\Meetings\HostsModel;
use App\Repository\Credits\MemberName;
use Carbon\Carbon;

class HostNameController extends Controller
{
    public function getHost()
    {
        $month = HostsModel::select('month','member_id')
            ->where('month','<=',now())
            ->orderBy('month','desc')
            ->limit(1)
            ->first();



        $host_this_month=MemberName::memberid($month->member_id);

        return response()->json([
            'data'=>$host_this_month
        ],201);





    }
}
