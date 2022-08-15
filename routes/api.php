<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['middleware' => 'api'], function($router) {
    Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);
    Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
    Route::post('/refresh', [\App\Http\Controllers\UserController::class, 'refresh']);
    Route::post('/profile', [\App\Http\Controllers\UserController::class, 'profile']);

    Route::get('/motor', [\App\Http\Controllers\MotorController::class, 'index'])->middleware('auth:api');

});
