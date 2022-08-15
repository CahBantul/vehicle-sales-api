<?php

use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\AuthController;
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

Route::post('/register', [AuthController::class, "register"])->name('register');
Route::post('/login', [AuthController::class, "authenticate"]);

Route::group(['middleware' => ['jwt.verify']], function(){
  Route::prefix('vehicle')->group(function (){
    Route::get('/', [VehicleController::class, "index"]);
    Route::get('/stock', [VehicleController::class, "stock"]);
    Route::get('/sold', [VehicleController::class, "sold"]);
  });

  Route::prefix('car')->group(function (){
    Route::get('/', [CarController::class, "index"]);
    Route::get('/stock', [CarController::class, "stock"]);
    Route::get('/sold', [CarController::class, "sold"]);
    Route::get('/{id}', [CarController::class, "show"]);
  });

  Route::prefix('motor')->group(function (){
    Route::get('/', [MotorController::class, "index"]);
    Route::get('/stock', [MotorController::class, "stock"]);
    Route::get('/sold', [MotorController::class, "sold"]);
    Route::get('/{id}', [MotorController::class, "show"]);
  });

});