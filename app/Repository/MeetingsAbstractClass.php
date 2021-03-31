<?php


namespace App\Repository;


use App\Models\Meetings\HostsModel;
use App\Models\User;
use Carbon\Carbon;

abstract class MeetingsAbstractClass implements MeetingsAbstractInterface
{

    /**
     * @var HostsModel
     */
    private $hostsModel;
    /**
     * @var Carbon
     */
    private $carbon;
    /**
     * @var User
     */
    private $user;

    public function __construct(HostsModel $hostsModel, Carbon $carbon, User $user)
    {

        $this->hostsModel = $hostsModel;
        $this->carbon = $carbon;
        $this->user = $user;
    }


    public function findHost()
    {
        return $this->hostsModel->whereMonth('month', $this->carbon->now()->month)->value('idhost');
    }

    public function findMemberid(array $members)
    {
        $member_id = array();

        foreach ($members as $member) {
            $res = $this->user->where('name', $member)->value('id');
            $member_id[] = $res;
        }

        return $member_id;
    }
}
