<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Language;
use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view_all_movies');

        return view('movies.index', [
            'movies' => Movie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create_movie');

        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMovieRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(StoreMovieRequest $request)
    {
        Movie::create($request->validated());

        return redirect(route('movies.index'))->withSuccess('Movie stored successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        $this->authorize('view_movie');

        $genres = Genre::all();
        $languages = Language::all();
        $movieSchedule = $movie->schedule()->get();
        return view('movies.show', compact('movie', 'genres', 'movieSchedule', 'languages'));
    }

    public function addPicture(Request $request, $id)
    {
        $this->authorize('add_picture');

        $movie = Movie::find($id);

        $movie->addMediaFromRequest('image')->toMediaCollection('pictures');

        $genre = Genre::pluck('name', 'id');

        return redirect(route('movies.show', $movie, compact('genre')));
    }

    public function linkGenre(Request $request, $id)
    {
        $this->authorize('add_genre');

        $movie = Movie::find($id);

        $movie->genre()->attach($request['genre_id']);

        return redirect(route('movies.show', $request['movie_id']));
    }


    public function addLanguage(Request $request, $id)
    {
        $this->authorize('add_language');

        $movie = Movie::find($id);

        $movie->language()->attach($request['language_id']);

        return redirect(route('movies.show', $request['movie_id']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $this->authorize('edit_movie');

        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMovieRequest  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $this->authorize('update_movie');

        $movie->update($request->except(['_method', '_token']));

        return redirect(route('movies.index'))->withSuccess('Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Movie $movie)
    {
        $this->authorize('delete_movie');

        $movie->delete();

        return redirect(route('movies.index'))->withSuccess('Movie deleted successfully');
    }
}
