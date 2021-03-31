<?php

namespace App\Models;


use App\Models\Debits\BankAccountModels;
use App\Models\Debits\CashAccountModel;
use App\Models\Loans\CoopLoanModel;
use App\Models\Loans\EmergencyModelAccount;
use App\Models\Loans\LoansAccountModel;
use App\Models\Meetings\AttendanceModel;
use App\Models\Meetings\HostsModel;

use App\Notifications\LoanHasBeenApprovedNotification;
use App\Traits\NewUserRegistered;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Notifications\CustomEmailNotification;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable,NewUserRegistered,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bank_accounts(){

        return $this->hasMany(BankAccountModels::class);
    }

    public function cash_accounts(){

        return $this->hasMany(CashAccountModel::class);
    }

    public function attendance(){

        return $this->hasMany(AttendanceModel::class);
    }

    public function loansAccount(){

        return $this->hasMany(LoansAccountModel::class);
    }

    public function coploan(){

        return $this->hasMany(CoopLoanModel::class);
    }
    public function messages()
    {
        return $this->hasMany(ChatMessages::class);
    }

    public function emergency(){

        return $this->hasMany(EmergencyModelAccount::class,'member_id');
    }


    public function host(){

        return $this->hasOne(HostsModel::class,'member_id');
    }



}
