<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MailReservationConfirmation extends Notification
{
    use Queueable;

    private $reservations;
    private $checkout_ticket_price;
    private $value;
    private $schedule;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reservations, $checkout_ticket_price, $value, $schedule)
    {
        $this->checkout_ticket_price = $checkout_ticket_price;
        $this->reservations = $reservations;
        $this->value = $value;
        $this->schedule = $schedule;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Hello there, ')
                    ->line('Here is your Reservation Notice.')
                    ->line('Your seat(s) have been reserved. Please get to the theatre; '. $this->schedule->hall->theatre->name .', 30 minutes before, so that you can safely book your ticket and secure your seat.')
                    ->line('This is your seat number: ' . $this->value . ' at ' . $this->schedule->hall->name)
                    ->line('The checkout balance is TZS '. number_format($this->checkout_ticket_price) . '/= only.')
                    ->line('Here is your Reference Code ')
                    ->line('--------- ' . $this->reservations->reference_code . ' ---------')
                    ->line('Present this code to the cashier for ticket(seat) validation.')
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
