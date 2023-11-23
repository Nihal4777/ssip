<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ItemsController;
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
Route::post("spa/auth", "App\Http\Controllers\AuthController@spaAuth");
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('consumption/history',[ApiController::class,'consumption_view']);
Route::post('consumption/history',[ApiController::class,'consumption_view']);
Route::post('consumption',[ApiController::class,'consumption_store']);

Route::get("get_cat",[ApiController::class,'get_cat']);
