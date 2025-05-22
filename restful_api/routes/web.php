<?php

use App\Http\Controllers\WeatherControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('weather');
});

Route::get("/weather/{citytofecth?}", [WeatherControler::class, "getWeather"]);
Route::get('/', [WeatherControler::class, 'showWeatherPage']);
