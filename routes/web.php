<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TournamentController;

Route::get('tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create');
Route::post('tournaments', [TournamentController::class, 'store'])->name('tournaments.store');


