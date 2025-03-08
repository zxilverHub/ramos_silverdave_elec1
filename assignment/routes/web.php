<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer/{id}/{name}/{address}', [OrderController::class, 'customerView']);
Route::get('/item/{noitem}/{name}/{price}', [OrderController::class, 'itemView']);
Route::get('/date/{id}/{name}/{orderno}/{date}', [OrderController::class, 'dateView']);
Route::get('/orderdetails/{transno}/{orderno}/{itemid}/{name}/{price}/{qty}', [OrderController::class, 'detailsView']);

Route::get('/insert', [StudentController::class, 'insertform']);
Route::post('/create', [StudentController::class, 'insert']);

Route::get('view-records', [StudentController::class, 'index']);
Route::get('delete/{id}', [StudentController::class, 'del']);
// Route::get('personal_information/public/delete/{id}', [StudentController::class, 'del']);
