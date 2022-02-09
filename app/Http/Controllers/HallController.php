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
        $this->authorize('view_all_halls');

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
        $this->authorize('create_hall');

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

        return redirect(route('hall.index'))->withSuccess('Hall added successfully.');
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
        $this->authorize('edit_hall');

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
        $this->authorize('update_hall');

        $hall->update($request->validated());

        return redirect(route('hall.index'))->withSuccess('Hall updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hall  $hall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hall $hall)
    {
        $this->authorize('delete_hall');

        $hall->delete();

        return redirect(route('hall.index'))->withSuccess('Hall deleted successfully');
    }
}
