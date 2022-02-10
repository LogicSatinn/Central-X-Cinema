<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('web');
Route::get('/movie-details/{movie}', 'HomeController@movieDetails')->name('movieDetails');
Route::post('/query', 'HomeController@movieQuery');
Route::get('/timetable', 'HomeController@schedule');
Route::post('/scheduleQuery', 'HomeController@scheduleQuery');

Route::get('/ticket/seat_plan/{schedule}', 'ReservationController@seatPlan');
Route::match(['post', 'get'], '/ticket/checkout/{schedule}', 'ReservationController@checkout');

Route::middleware(['auth'])->group(function () {
    Route::post('/movies/{id}/linkGenre', 'MovieController@linkGenre');
    Route::post('/movies/{id}/addLanguage', 'MovieController@addLanguage');
    Route::post('/movies/{id}/addPicture', 'MovieController@addPicture')->name('addPicture');


    Route::resource('movies', 'MovieController');
    Route::resource('genre', 'GenreController');
    Route::resource('theatre', 'TheatreController');
    Route::resource('hall', 'HallController');
    Route::resource('schedule', 'ScheduleController');

    Route::get('/dashboard', 'DashboardController')->name('dashboard');
});

require __DIR__.'/auth.php';
