<?php

use Illuminate\Support\Facades\Route;


Route::resource('movies', 'MovieController');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
