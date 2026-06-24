<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//Team
Route::get('/aboutUs', [TeamController::class, 'aboutUs'])->name('aboutUs');
Route::get('/aboutUs/details/{id}', [TeamController::class, 'details'])->name('teamDetails');

//Anime
Route::get('/anime', [AnimeController::class, 'anime'])->name('anime');
Route::get('/anime/details/{id}', [AnimeController::class, 'details'])->name('animeDetails');