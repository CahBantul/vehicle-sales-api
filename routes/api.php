<?php

use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('vehicle')->group(function (){
  Route::get('/', [VehicleController::class, "index"]);
  Route::get('/count', [VehicleController::class, "count"]);
  Route::get('/stock', [VehicleController::class, "stock"]);
});

Route::prefix('car')->group(function (){
  Route::get('/', [CarController::class, "index"]);
  Route::get('/count', [CarController::class, "count"]);
  Route::get('/stock', [CarController::class, "stock"]);
  Route::get('/sold', [CarController::class, "sold"]);
  Route::get('/{id}', [CarController::class, "show"]);
});