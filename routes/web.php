<?php

use Illuminate\Support\Facades\Route;

Route::post('/movies/{id}/linkGenre', 'MovieController@linkGenre')->name('linkGenre');
Route::post('/movies/{id}/addPicture', 'MovieController@addPicture')->name('addPicture');
Route::resource('movies', 'MovieController');
Route::resource('genre', 'GenreController');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
