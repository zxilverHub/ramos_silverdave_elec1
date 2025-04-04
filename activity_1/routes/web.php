<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get("/login", [LoginController::class, 'showLoginForm'])->name('login');
Route::get("/dashboard", [LoginController::class, 'dashboard'])->name('dashboard');
Route::post("/login", [LoginController::class, 'login']);
Route::get("/logout", [LoginController::class, 'logout'])->name('logout');
Route::middleware("auth")->get('/dashboard', function () {
    return view('dashboard');
});
