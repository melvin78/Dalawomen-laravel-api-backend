<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LoanHasBeenApprovedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    private $loan;


    public function __construct($loan)
    {
        //
        $this->loan= $loan;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }




    public function toDatabase($notifiable)
    {
        return $this->loan;

    }
}
