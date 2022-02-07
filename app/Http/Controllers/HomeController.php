<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Hall;
use App\Models\Movie;
use App\Models\Region;
use App\Models\Schedule;
use App\Models\Theatre;
use Illuminate\Http\Request;
use App\Models\Language;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'genre' => Genre::pluck('name', 'id'),
            'language' => Language::pluck('name', 'id'),
            'hall' => Hall::pluck('experience', 'id'),
            'movies' => Movie::paginate(6)
        ]);
    }

    public function movieDetails(Movie $movie)
    {
        $movieSchedule = $movie->schedule()->get();
        return view('frontend.movie_details', compact('movie', 'movieSchedule'));
    }

    public function movieQuery(Request $request, Movie $movie)
    {
        $movie = $movie->newQuery();

        if ($request->has('genre_id')) {
            if ($request['genre_id'] == null) {
                $movie->get();
            } else {
                $movie->whereHas('genre', function($query) use ($request) {
                    $query->where('genre_id', $request['genre_id']);
                });
            }
        }

        if ($request->has('language_id')) {
            if ($request['language_id'] == null) {
                $movie->get();
            } else {
                    $movie->whereHas('language', function($query) use ($request) {
                        $query->where('language_id', $request['language_id']);
                    });
            }
        }


            $movies = $movie->paginate(6);

            return view('frontend.index', compact('movies'), [
                'genre' => Genre::pluck('name', 'id'),
                'language' => Language::pluck('name', 'id'),
                'hall' => Hall::pluck('experience', 'id')
            ]);

    }

    public function schedule()
    {
        return view('frontend.schedule', [
            'region' => Region::pluck('name', 'id'),
            'language' => Language::pluck('name', 'id'),
            'theatre' => Theatre::pluck('name', 'id'),
            'hall' => Hall::pluck('experience', 'id'),
            'schedules' => Schedule::with(['hall', 'movie'])->orderBy('showdate')->orderBy('showtime')->get()
        ]);
    }

    public function scheduleQuery(Request $request, Schedule $schedule)
    {
        $schedule = $schedule->newQuery();

        if ($request->has('region_id')) {
            if ($request['region_id'] == null) {
                $schedule->get();
            } else {
                $schedule->whereHas('hall.theatre.region', function ($query) use ($request) {
                    $query->where('region_id', $request['region_id']);
                })->get();
            }
        }

        if ($request->has('theatre_id')) {
            if ($request['theatre_id']) {
                $schedule->get();
            } else {
                $schedule->whereHas('hall.theatre', function($query) use($request) {
                    $query->where('theatre_id', $request['theatre_id']);
                })->get();
            }
        }

        if ($request->has('hall_experience')) {
            if ($request['hall_experience'] == null) {
                $schedule->get();
            } else {
                $schedule->whereHas('hall', function ($query) use ($request) {
                    $query->where('experience', $request['hall_experience']);
                })->get();
            }
        }

        $schedules = $schedule->orderBy('showdate')->orderBy('showtime')->get();

        return view('frontend.schedule', compact('schedules') , [
            'region' => Region::pluck('name', 'id'),
            'language' => Language::pluck('name', 'id'),
            'theatre' => Theatre::pluck('name', 'id'),
            'hall' => Hall::pluck('experience', 'id')
        ]);

    }
}
