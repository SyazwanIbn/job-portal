<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::get('', function () {
    return to_route('jobs.index');
});

Route::resource('jobs', JobController::class)
    ->only(['index']);
