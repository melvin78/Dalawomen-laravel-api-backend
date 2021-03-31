<?php


namespace App\Traits;


use App\Models\Credits\PenaltiesModel;
use App\Models\Meetings\AttendanceModel;

trait MeetingMissed
{

    public static function bootMeetingMissed()
    {

        static::created(function (AttendanceModel $attendanceModel) {


                PenaltiesModel::create([
                   'penaltytype_id' => 6,
                   'member_id' => $attendanceModel->member_id
              ]);




        });
    }

}
