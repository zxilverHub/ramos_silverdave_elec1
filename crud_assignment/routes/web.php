<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'stud_view']);

Route::get('insert', function () {
    return view('insert');
});

Route::post('insert', [StudentController::class, 'insert']);

Route::get('delete/{id}', [StudentController::class, 'destroy']);
Route::get('edit/{id}/{name}', [StudentController::class, 'goedit']);
Route::post('submitedit', [StudentController::class, 'edit']);
