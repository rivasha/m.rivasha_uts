<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movie/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');