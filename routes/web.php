<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\WeatherData;
use App\Http\Controllers\TouristSpot;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Home::class, 'index']);
Route::get('tourist-spot', [home::class, 'getTouristSpot']);
Route::get('fiveday-weather', [Home::class, 'fiveDayWeather']);
Route::get('current-weather', [Home::class, 'getCurrentWeather']);
Route::get('city-weather', [Home::class, 'getWeatherPerCity']);

