<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Movie;
use App\Models\Reservation;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __invoke()
    {
        $movies = Movie::count('name');

        $schedule = Schedule::count('id');

        $tickets = Reservation::whereStatus('Booked')->count();

        $halls = Hall::count('name');

        $bookedHalls = Schedule::all();

        $bookedTickets = Reservation::whereStatus('Booked')->get();

        return view('dashboard', compact('movies', 'schedule', 'tickets', 'halls', 'bookedHalls', 'bookedTickets'));
    }
}
