<?php

namespace App\Http\Controllers;

use App\Http\Requests\MeetingRequest;
use App\Repository\MeetingsInterface;

class MeetingsController extends Controller
{
    /**
     * @var MeetingsInterface
     */
    private $meetings;

    public function __construct(MeetingsInterface $meetings)
    {

        $this->meetings = $meetings;
    }

    public function intitateMeeting(MeetingRequest $meetingRequest)
    {

        $meetingname = $meetingRequest->validated();
        $meetingid = $this->meetings->startMeeting($meetingname['meeting']);

        return response()->json([

            'data' => 'Meeting name saved',
            'meetingid' => $meetingid
        ], 201);


    }

    public function absentees(){


    }
}

