<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FormController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PublicServiceQualityController;
use App\Http\Controllers\Admin\BRPredictionController;
use App\Http\Controllers\Admin\WeatherPredictionController;
use App\Http\Controllers\Admin\EconomicGrowthController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/public-service-quality', [PublicServiceQualityController::class, 'index'])->name('public-service-quality');
Route::get('/birth-rate-prediction', [BRPredictionController::class, 'index'])->name('birth-rate-prediction');
Route::get('/weather-prediction', [WeatherPredictionController::class, 'index'])->name('weather-prediction');
Route::get('/economic-growth', [EconomicGrowthController::class, 'index'])->name('economic-growth');
