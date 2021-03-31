<?php

namespace App\Mail;

use App\Models\Loans\LoansAccountModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $loans;

    /**
     * Create a new message instance.
     *
     * @param $loans
     */
    public function __construct($loans)
    {
        //
        $this->loans = $loans;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.test.test');
    }
}
