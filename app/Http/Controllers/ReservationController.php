<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Notifications\BeemReservationConfirmation;
use App\Notifications\MailReservationConfirmation;
use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{

    public function seatPlan(Schedule $schedule)
    {
        $reservations = $schedule->reservation()->get();
        return view('frontend.movie_seat_plan', compact('reservations', 'schedule'));
    }


    public function checkout(Request $request, Schedule $schedule)
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

        $seats = Arr::flatten($request['seat']);

        $n_seats = count($seats);

        $checkout_ticket_price = $schedule->price;

        foreach ($request['seat'] as $key => $value) {
            if (Reservation::whereScheduleId($schedule->id)->whereSeatNumber($value)->whereStatus('Booked')->exists()) {
                return back()->withInput()->withSuccess('This seat is already booked');
            }

            Reservation::whereScheduleId($schedule->id)->whereSeatNumber($value)->update([
                'status' => 'Booked',
                'reference_code' => strtoupper(substr((str_shuffle($permitted_chars)), 0, 4))
            ]);
            $reservations = Reservation::whereScheduleId($schedule->id)->whereSeatNumber($value)->first();

            Notification::route('mail', $request['email'])->notify(new MailReservationConfirmation($reservations, $checkout_ticket_price, $value, $schedule));
            Notification::route('beem', $request['phone_number'])->notify(new BeemReservationConfirmation());
        }


        return redirect()->route('web')->withSuccess('Your Seat(s) is booked.');
    }

}
