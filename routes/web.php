<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WallController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {

    Route::get('/films',
        [FilmController::class, 'films'])->name('films');

    Route::get('/genre/{id}',
        [FilmController::class, 'genre'])->name('genre');

    Route::get('/film/{id}', [FilmController::class, 'film'])->name('film');

// ---------------------------------------------

    Route::get('/dashboard',
        [WallController::class, 'dashboard'])->name('dashboard');

    Route::post('/postMessage', [WallController::class, 'write'])->name('publishMessage');

    Route::get('/editMessageForm/{id}', [WallController::class, 'editMessageForm'])->name('editMessageForm');

    Route::post('/updateMessage', [WallController::class, 'updateMessage'])->name('updateMessage');

    Route::get('/deleteMessage/{id}', [WallController::class, 'delete'])->name('deleteMessage');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
