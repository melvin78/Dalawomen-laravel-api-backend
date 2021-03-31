<?php

namespace App\Providers;


use App\Http\Requests\LoanRequest;
use App\Repository\Accounts\AllLoansAccountsClass;
use App\Repository\AccountsInterface;
use App\Repository\Credits\ApproveLoan;
use App\Repository\Credits\ApproveLoanInterface;
use App\Repository\Credits\CooperativeLoanClass;
use App\Repository\CreditsInterface;
use App\Repository\IssuePenaltyInterface;
use App\Repository\Meetings\InitiateMeeting;
use App\Repository\Meetings\MembersAbsent;
use App\Repository\Meetings\MembersAbsentInterface;
use App\Repository\MeetingsInterface;
use App\Repository\Penalties\FindPenaltiesClass;
use App\Repository\Penalties\IssuePenalties;
use App\Repository\Penalties\UpdatePenaltyStatus;
use App\Repository\Penalties\UpdatePenaltyStatusInterface;
use App\Repository\PenaltiesInterface;
use Illuminate\Support\ServiceProvider;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(CreditsInterface::class, CooperativeLoanClass::class);
        $this->app->bind(IssuePenaltyInterface::class, IssuePenalties::class);
        $this->app->bind(PenaltiesInterface::class, FindPenaltiesClass::class);
        $this->app->bind(UpdatePenaltyStatusInterface::class, UpdatePenaltyStatus::class);
        $this->app->bind(MeetingsInterface::class, InitiateMeeting::class);
        $this->app->singleton(MembersAbsentInterface::class,MembersAbsent::class);
        $this->app->bind(ApproveLoanInterface::class,ApproveLoan::class);
        $this->app->bind(AccountsInterface::class,AllLoansAccountsClass::class);




    }

    public function boot()
    {
        //
    }
}
