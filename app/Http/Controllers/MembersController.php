<?php

namespace App\Http\Controllers;

use App\Http\Resources\MembersResource;
use App\Models\User;
use Illuminate\Filesystem\Cache;


class MembersController extends Controller
{

    public function getMembers(){




        return MembersResource::collection(User::all());
    }
}
