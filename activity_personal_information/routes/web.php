<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('form');
});

Route::post('form', [FormController::class, 'form']);
