<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');
Route::get('/movie-details/{movie}', 'HomeController@movieDetails')->name('movieDetails');


Route::middleware(['auth'])->group(function () {
    Route::post('/movies/{id}/linkGenre', 'MovieController@linkGenre')->name('linkGenre');
    Route::post('/movies/{id}/addLanguage', 'MovieController@addLanguage')->name('addLanguage');
    Route::post('/movies/{id}/addPicture', 'MovieController@addPicture')->name('addPicture');
    Route::resource('movies', 'MovieController');
    Route::resource('genre', 'GenreController');
    Route::resource('theatre', 'TheatreController');
    Route::resource('hall', 'HallController');
    Route::resource('schedule', 'ScheduleController');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
