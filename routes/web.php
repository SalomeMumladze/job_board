<?php

use App\Http\Controllers\JobBoardController;
use Illuminate\Support\Facades\Route;


Route::resource('jobs', JobBoardController::class)
    ->only(['index']);