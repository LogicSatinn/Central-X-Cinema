<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Movie;
use App\Models\Reservation;
use App\Models\Theatre;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view_all_schedules');

        return view('schedule.index', [
            'schedules' => Schedule::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create_schedule');

        return view('schedule.create', [
            'theatre' => Theatre::pluck('name', 'id'),
            'movie' => Movie::pluck('name', 'id'),
            'hall' => Hall::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreScheduleRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreScheduleRequest $request)
    {
        $hall = Hall::findOrFail($request->hall_id);

        $noOfSeats = $hall->no_of_seats;

        $schedule = Schedule::create($request->validated());

        for($i = 1; $i <= $noOfSeats; $i++){
            Reservation::create([
                'seat_number' => $i,
                'schedule_id' => $schedule->id,
                'status' => 'Available'
            ]);
        }

        return redirect(route('schedule.index'))->withSuccess('Schedule created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $hallMovie
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        $this->authorize('edit_schedule');

        return view('schedule.edit', compact('schedule'), [
            'theatre' => Theatre::pluck('name', 'id'),
            'movie' => Movie::pluck('name', 'id'),
            'hall' => Hall::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScheduleRequest  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        $this->authorize('update_schedule');

        $schedule->update($request->validated());

        return redirect(route('schedule.index'))->withSuccess('Schedule updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Schedule $schedule, Reservation $reservation)
    {
        $this->authorize('delete_schedule');

        $reservation->whereScheduleId($schedule->id)->delete();

        $schedule->delete();

        return redirect(route('schedule.index'))->withSuccess('Theatre deleted successfully');
    }
}
