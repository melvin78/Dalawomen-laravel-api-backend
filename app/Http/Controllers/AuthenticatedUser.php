<?php

namespace App\Http\Controllers;

use App\Http\Resources\AuthenticatedUserResource;
use App\Models\User;

class AuthenticatedUser extends Controller
{
    public function authUser()
    {
        return new AuthenticatedUserResource(User::all());
    }
}
