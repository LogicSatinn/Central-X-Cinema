<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Models\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use App\Models\Movie;
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
        return view('schedule.index', [
            'hallmovie' => Schedule::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
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
        Schedule::create($request->validated());

        return redirect(route('schedule.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $hallMovie
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $hallMovie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $hallMovie
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $hallMovie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScheduleRequest  $request
     * @param  \App\Models\Schedule  $hallMovie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScheduleRequest $request, Schedule $hallMovie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $hallMovie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $hallMovie)
    {
        //
    }
}
