<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class MembersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>\Illuminate\Support\Str::random(4),
            'name'=>$this->name,
            'email'=>$this->email,
            'joined'=>$this->created_at->diffForHumans()
        ];
    }
}
