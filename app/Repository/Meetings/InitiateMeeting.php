<?php


namespace App\Repository\Meetings;


use App\Models\Meetings\AttendanceModel;
use App\Models\Meetings\HostsModel;
use App\Models\Meetings\MeetingsModel;
use App\Models\User;
use App\Repository\MeetingsAbstractClass;
use App\Repository\MeetingsInterface;
use Carbon\Carbon;

class InitiateMeeting extends MeetingsAbstractClass implements MeetingsInterface
{

    /**
     * @var MeetingsModel
     */
    private $meetingsModel;


    /**
     *
     * @param HostsModel $hostsModel
     * @param Carbon $carbon
     * @param MeetingsModel $meetingsModel
     */

    public $res;
    /**
     * @var AttendanceModel
     */
    private $attendanceModel;
    /**
     * @var User
     */
    private $user;

    public function __construct(HostsModel $hostsModel, Carbon $carbon, User $user, MeetingsModel $meetingsModel, AttendanceModel $attendanceModel)
    {
        parent::__construct($hostsModel, $carbon, $user);
        $this->meetingsModel = $meetingsModel;
        $this->attendanceModel = $attendanceModel;
        $this->user = $user;
    }

    public function startMeeting($meeting)
    {

        return $this->res = $this->meetingsModel->create([

            'hostid' => $this->findHost(),
            'nickname' => $meeting
        ])->idmeeting;


    }
    public function getMeetingid()
    {

        $res = $this->meetingsModel->select('idmeeting')->latest()->first();

        return $res->idmeeting;
    }

    public function getAbsentmembers(array $members)
    {
        $member_id = array();

        foreach ($members as $member) {
            $member_id[] = $this->user->where('name', $member)->value('id');
        }

        foreach ($member_id as $value) {
            $this->attendanceModel->create([
                'member_id' => $value,
                'meeting_id' => $this->getMeetingid()
            ]);
        }


    }




}
