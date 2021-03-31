<?php


namespace App\Repository;


interface MeetingsInterface
{
    public function startMeeting($meeting);

    public function getAbsentmembers(array $members);

    public function getMeetingid();
}
