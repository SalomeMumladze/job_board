<?php

use App\Http\Controllers\JobBoardController;
use Illuminate\Support\Facades\Route;

Route::get('', fn() => to_route('jobs.index'));

Route::resource('jobs', JobBoardController::class)
    ->only(['index', 'show']);