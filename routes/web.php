<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnergyBoostController;

Route::get('/', function () {
    return redirect('/energy');
});

Route::resource('energy', EnergyBoostController::class);