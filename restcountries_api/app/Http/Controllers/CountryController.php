<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CountryController extends Controller
{
    public function getCountries()
    {
        $response = Http::get("https://restcountries.com/v3.1/all");

        if ($response->successful()) {
            $countries = collect($response->json())->map(function ($country) {
                return [
                    'name' => $country['name']['common'] ?? 'N/A',
                    'region' => $country['region'] ?? 'N/A',
                    'flag' => $country['flags']['png'] ?? '',
                ];
            });

            return view('welcome', ['countries' => $countries]);
        } else {
            return view('welcome', ['countries' => []]);
        }
    }
}
