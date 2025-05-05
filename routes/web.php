<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::get('', function () {
    return redirect()->route('jobs.index');  // Redirect ke jobs.index
});

Route::resource('jobs', JobController::class)
    ->only(['index', 'show']);  // Hanya index dan show yang ada dalam route resource
