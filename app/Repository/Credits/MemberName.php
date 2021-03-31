<?php


namespace App\Repository\Credits;


use App\Models\User;

class MemberName
{
    public static function memberid($member_id)
    {
        $membername = new User();
        return $membername->where('id', $member_id)->value('name');

    }

}
