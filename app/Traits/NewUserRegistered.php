<?php


namespace App\Traits;


use App\Events\NewCustomerHasRegisteredEvent;
use App\Models\Meetings\HostsModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;

trait NewUserRegistered
{

    public static function bootNewUserRegistered()
    {

        static::created(function (User $user) {
            event(new NewCustomerHasRegisteredEvent($user->name, $user->email));
            $latest_Date = HostsModel::select('month')
                ->orderBy('idhost','desc')
                ->limit(1)
                ->first();

            $carbon_date = new Carbon($latest_Date->month);
            $final_date = $carbon_date->addMonth();

            $user->host()->create([
                'month' => $final_date
            ]);

        });
    }
}
