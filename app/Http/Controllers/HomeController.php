<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Region;
use App\Models\Theatre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index', [
            'region' => Region::pluck('name', 'id'),
            'theatre' => Theatre::pluck('name', 'id'),
            'movies' => Movie::paginate(6)
        ]);
    }

    public function movieDetails(Movie $movie)
    {
        return view('frontend.movie_details', compact('movie'));
    }
}
