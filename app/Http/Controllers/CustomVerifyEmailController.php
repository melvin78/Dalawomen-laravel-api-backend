<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Auth\Events\Verified;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;
use Laravel\Fortify\Http\Requests\VerifyEmailRequest;

class CustomVerifyEmailController extends VerifyEmailController
{



    public function __invoke(VerifyEmailRequest $request):RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect(config('fortify.home'));
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new verified($request->user()));
        }

        return redirect(config('fortify.home'));
    }

}
