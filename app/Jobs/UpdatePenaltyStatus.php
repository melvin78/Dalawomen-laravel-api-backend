<?php

namespace App\Jobs;

use App\Repository\Penalties\UpdatePenaltyStatusInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdatePenaltyStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



    public function handle(UpdatePenaltyStatusInterface $penaltyStatus)
    {
        $penaltyStatus->updatePenaltyStatus();
    }
}
