<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Tomsgad\Beem\SMS\BeemSms;

class BeemReservationConfirmation extends Notification
{
    use Queueable;

    private $reservations;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reservations)
    {
        $this->$reservations = $reservations;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['beem'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return BeemSms
     */
    public function toBeem($notifiable)
    {
        return (new BeemSms())
            ->content('Hello. Your seat(s) have been reserved. Please get to the theatre 30 minutes before, so that you can safely book your ticket and secure your seat. Here is your Reference Code ' . $this->reservations->reference_code . '. Present this code to the cashier for ticket(seat) validation. We have sent you an email with further information.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}