<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class MemberStatusController extends Controller
{
    public function getMembers()
    {


        $user = User::with('roles')->get();
        $data = array();


        foreach ($user as $users) {
            $details['name'] = $users->getAttributes()['name'];
            $details['user_id'] = $users->getAttributes()['id'];
            $details['roles'] = $users->getRoleNames();
            $details['email'] = $users->getAttributes()['email'];
            $details['created_at'] = Carbon::parse($users->getAttributes()['created_at'])->diffForHumans();
            if (Cache::has('user-is-online-' . $users->getAttributes()['id'])) {
                $details['status'] = 'online';
            } else {
                $details['status'] = 'offline';
            }
            array_push($data, $details);
        }


        return response()->json([
            'data' => $data

        ]);
    }
}
