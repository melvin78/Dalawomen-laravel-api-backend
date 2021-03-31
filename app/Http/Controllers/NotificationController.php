<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class NotificationController extends Controller
{
    public function myNotifications()

    {
        $data = array();

        $notifications = auth()->user()->unreadNotifications->pluck('data')->flatten(1);


        foreach ($notifications as $value) {

            $details['date']=Carbon::parse($value['date'])->diffForHumans();
            $details['members']=$value['members'];
            $details['amount']=$value['amount'];
            $details['loans']=$value['loans'];

            array_push($data,$details);
        }

        return response()->json(['data' => $data]);

    }
}
