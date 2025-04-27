<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, "index"]);
Route::post('/', [StudentController::class, "index"]);
