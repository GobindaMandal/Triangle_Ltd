<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\myapi;
use App\Http\Controllers\Backend\ApiUserController;

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

Route::post('/getDatafromAPI',[myapi::class,"getDatafromAPI"]);
Route::post('/insertDatafromAPI',[myapi::class,"insertDatafromAPI"]);

Route::post('/apiuserstore',[ApiUserController::class,"apiuserstore"])->name("apiuserstore");
Route::get('/addapiuser',[ApiUserController::class,"addUser"]);
Route::get('/profile/{id}',[ApiUserController::class,"profile"]);
Route::post('/updatedata/{id}',[ApiUserController::class,"updatedata"])->name("updatedata");
Route::get('/code/{id}',[ApiUserController::class,"code"]);