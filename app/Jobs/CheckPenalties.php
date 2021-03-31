<?php

namespace App\Jobs;

use App\Models\Loans\LoansAccountModel;
use App\Repository\IssuePenaltyInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CheckPenalties implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var LoansAccountModel
     */


    public function __construct()
    {
        //

    }


    public function handle(IssuePenaltyInterface $issuePenalty)
    {
        $issuePenalty->issuePenalty();

    }
}
