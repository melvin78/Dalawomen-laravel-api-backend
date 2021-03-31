<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarkAsReadController extends Controller
{
    public function markAs(){

        auth()->user()->unreadNotifications->markAsRead();
    }
}
