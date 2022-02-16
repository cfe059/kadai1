<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalcSq;
use App\Http\Controllers\CalcCube;
use App\Http\Controllers\CalcCircle;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['middleware' => 'api'])->group(function () {
    Route::get('/sq', [CalcSq::class, 'index']);
    Route::get('/cube', [CalcCube::class, 'index']);
    Route::get('/circle', [CalcCircle::class, 'index']);
});
