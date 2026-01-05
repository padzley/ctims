<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TowerController;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Tower Routes
|--------------------------------------------------------------------------
*/

Route::get('/towers', [TowerController::class, 'index'])->name('towers.index');
Route::get('/towers/create', [TowerController::class, 'create'])->name('towers.create');
Route::post('/towers', [TowerController::class, 'store'])->name('towers.store');
