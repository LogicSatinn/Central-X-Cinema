<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use App\Http\Requests\StoreHallRequest;
use App\Http\Requests\UpdateHallRequest;
use App\Models\Theatre;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hall.index', [
            'halls' => Hall::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hall.create', [
            'theatre' => Theatre::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHallRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHallRequest $request)
    {
        Hall::create($request->validated());

        return redirect(route('hall.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function show(Hall $hall)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function edit(Hall $hall)
    {
        return view('hall.edit', compact('hall'), [
            'theatre' => Theatre::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHallRequest  $request
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHallRequest $request, Hall $hall)
    {
        $hall->update($request->validated());

        return redirect(route('hall.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hall $hall)
    {
        $hall->delete();

        return redirect(route('hall.index'));
    }
}
