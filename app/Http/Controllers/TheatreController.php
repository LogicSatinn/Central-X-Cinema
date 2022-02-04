<?php

namespace App\Http\Controllers;

use App\Models\Theatre;
use App\Http\Requests\StoreTheatreRequest;
use App\Http\Requests\UpdateTheatreRequest;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theatre.index', [
            'theatres' => Theatre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theatre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTheatreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTheatreRequest $request)
    {
        Theatre::create($request->validated());

        return redirect(route('theatre.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function show(Theatre $theatre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function edit(Theatre $theatre)
    {
        return view('theatre.edit', compact('theatre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTheatreRequest  $request
     * @param  \App\Models\Theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTheatreRequest $request, Theatre $theatre)
    {
        $theatre->update($request->validated());

        return redirect(route('theatre.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theatre $theatre)
    {
        $theatre->delete();

        return redirect(route('theatre.index'));
    }
}