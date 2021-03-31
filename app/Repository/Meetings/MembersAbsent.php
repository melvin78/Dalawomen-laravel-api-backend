<?php


namespace App\Repository\Meetings;


use App\Models\Meetings\AttendanceModel;
use App\Models\Meetings\HostsModel;
use App\Models\Meetings\MeetingsModel;
use App\Models\User;
use Carbon\Carbon;

class MembersAbsent extends InitiateMeeting implements MembersAbsentInterface
{

    /**
     * @var AttendanceModel
     */
    private $attendanceModel;

    public function __construct(HostsModel $hostsModel, Carbon $carbon, User $user, MeetingsModel $meetingsModel, AttendanceModel $attendanceModel)
{
    parent::__construct($hostsModel, $carbon, $user, $meetingsModel, $attendanceModel);
    $this->attendanceModel = $attendanceModel;
}

    public function getAbsentmembers($members)
    {

       // foreach ($members as $value){
            $this->attendanceModel->create([
                'member_id'=>$members,

            ]);
      //  }


    }

}
