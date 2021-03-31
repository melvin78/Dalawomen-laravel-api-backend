<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class AuthenticatedUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>Auth::user()->id,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'role'=>Auth::user()->getRoleNames(),
        ];
    }
}
