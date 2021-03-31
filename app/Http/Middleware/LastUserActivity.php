<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Filesystem\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $expiredAt = Carbon::now()->addMinutes(1);
            \Illuminate\Support\Facades\Cache::put('user-is-online-'.Auth::user()->id,true,$expiredAt);
        }
        return $next($request);
    }
}
