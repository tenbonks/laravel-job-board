<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Redirect home to jobs index
Route::get('', fn() => to_route('jobs.index'));

Route::resource('jobs', JobController::class)
    ->only(['index']);
