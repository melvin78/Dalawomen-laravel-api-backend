<?php

namespace App\Http\Controllers;

use App\Http\Requests\MembersAbsentRequest;
use App\Repository\MeetingsInterface;

class MembersAbsentController extends Controller
{
    /**
     * @var MeetingsInterface
     */
    private $meetings;

    public function __construct(MeetingsInterface $meetings)
    {

        $this->meetings = $meetings;
    }

    public function absent(MembersAbsentRequest $request)
    {

        $requests = $request->validated();
        $this->meetings->getAbsentmembers($requests['members']);


        return response()->json([
            'data' => 'absentee list has been submitted and penalties issued'
        ], 201);
    }
}
