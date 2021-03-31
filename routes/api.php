<?php

use App\Http\Controllers\ApproveLoanController;
use App\Http\Controllers\AuthenticatedUser;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HostNameController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\MarkAsReadController;
use App\Http\Controllers\MeetingsController;
use App\Http\Controllers\MembersAbsentController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MemberStatusController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PendingLoanApprovalController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Broadcast::routes(['middleware' => ['auth:sanctum']]);


Route::group(['middleware' => ['can:Approve Loans']], function () {
    Route::post('/confirm_loans', [ApproveLoanController::class, 'approve']);
});

Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/absentees', [MembersAbsentController::class, 'absent']);
    Route::get('/approve_loans', [PendingLoanApprovalController::class, 'pendingLoans']);
    Route::post('/loans', [LoansController::class, 'borrowLoan']);
    Route::post('/meetings', [MeetingsController::class, 'intitateMeeting']);
    Route::get('/memberstat', [MemberStatusController::class, 'getMembers']);
    Route::post('fetch-messages', [ChatController::class, 'fetchMessages']);
    Route::post('send-messages', [ChatController::class, 'sendMessages']);
    Route::get('/members', [MembersController::class, 'getMembers']);

    Route::get('/notifications', [NotificationController::class, 'myNotifications']);
    Route::post('/markread', [MarkAsReadController::class, 'markAs']);
    Route::get('/host', [HostNameController::class, 'getHost']);
    Route::get('/balances', [DashBoardController::class, 'balance']);
    Route::get('/user', [AuthenticatedUser::class, 'authUser']);
});

