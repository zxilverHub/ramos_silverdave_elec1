<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherControler extends Controller
{
    public function getWeather(Request $request, $citytofetch = "london")
    {
        $city = $request->query("city", $citytofetch);

        $api_key = env('OPENWEATHER_API_KEY');

        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            "q" => $city,
            "appid" => $api_key,
            "units" => 'metric'
        ]);

        if ($response->successful()) {
            return response()->json([
                'city' => $city,
                "temperature" => $response["main"]["temp"],
                "description" => $response["weather"][0]["description"],
                "humidity" => $response["main"]["humidity"]
            ]);
        } else {
            return response()->json(
                [
                    "error" => "Could not fetch weather data"
                ],
                400
            );
        }
    }

    public function showWeatherPage()
    {
        $cities = ['london', 'singapore', 'dubai'];
        $api_key = env('OPENWEATHER_API_KEY');
        $weatherData = [];

        foreach ($cities as $city) {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
                "q" => $city,
                "appid" => $api_key,
                "units" => 'metric'
            ]);

            if ($response->successful()) {
                $weatherData[] = [
                    'city' => $city,
                    'temperature' => $response["main"]["temp"],
                    'description' => $response["weather"][0]["description"],
                    'humidity' => $response["main"]["humidity"]
                ];
            } else {
                $weatherData[] = [
                    'city' => $city,
                    'temperature' => 'N/A',
                    'description' => 'N/A',
                    'humidity' => 'N/A'
                ];
            }
        }

        return view('weather', compact('weatherData'));
    }
}
