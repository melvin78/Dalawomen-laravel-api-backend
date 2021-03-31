<?php


namespace App\Repository\Credits;


use App\Models\User;

class MemberIdentification
{
    public static function memberid($name)
    {
        $membername = new User();
        return $membername->where('name', $name)->value('id');

    }
}
