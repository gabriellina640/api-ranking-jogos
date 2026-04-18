<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('v1')->group(function () {
    Route::get('/rankings/weekly', [GameController::class, 'weeklyRanking']);
    Route::get('/rankings/monthly', [GameController::class, 'monthlyRanking']);
    Route::get('/rankings/yearly', [GameController::class, 'yearlyRanking']);
    Route::get('/rankings/history/{id}', [GameController::class, 'history']);
    Route::get('/games/most-played', [GameController::class, 'mostPlayed']);
    
    Route::get('/rankings/platforms/{platform}', [GameController::class, 'platformRanking']);
});

