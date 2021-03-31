<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PendingLoanApprovalCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */

    public static $wrap = 'user';

    public function toArray($request)
    {
        return ['data' => $this->collection];
    }
}
