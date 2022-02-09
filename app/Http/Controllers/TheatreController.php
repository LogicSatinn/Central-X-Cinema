<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Theatre;
use App\Http\Requests\StoreTheatreRequest;
use App\Http\Requests\UpdateTheatreRequest;

class TheatreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view_all_theatres');

        return view('theatre.index', [
            'theatres' => Theatre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create_theatre');

        return view('theatre.create', [
            'region' => Region::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTheatreRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreTheatreRequest $request)
    {
        Theatre::create($request->validated());

        return redirect(route('theatre.index'))->withToastSuccess('Theatre added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function show(Theatre $theatre)
    {
        $this->authorize('view_theatre');

        return view('theatre.show', compact('theatre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function edit(Theatre $theatre)
    {
        $this->authorize('edit_theatre');

        return view('theatre.edit', compact('theatre'), [
            'region' => Region::pluck('name', 'id')
        ]);
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
        $this->authorize('update_theatre');

        $theatre->update($request->validated());

        return redirect(route('theatre.index'))->withToastSuccess('Theatre added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theatre  $theatre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Theatre $theatre)
    {
        $this->authorize('delete_theatre');

        $theatre->delete();

        return redirect(route('theatre.index'))->withToastSuccess('Theatre added successfully');
    }
}
