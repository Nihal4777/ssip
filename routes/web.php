<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CentersController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\StocksController;
use App\Models\Item;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts');
});


Route::get("login",[AuthController::class,'login'])->name('login');
Route::post("login",[AuthController::class,'login_attempt']);
Route::get("logout",[AuthController::class,'logout']);
Route::group([ "middleware" => ["auth"]], function () {
    Route::resource("centers",CentersController::class);
    Route::resource("items",ItemsController::class);
    Route::resource("stocks",StocksController::class);
    Route::get('getItem/{id}',function($id){
        $states = Item::where('type',$id)->get();
        $data='<select class="form-control default-select wide state state-list"  name="item_name" required><option value="">-- Select Item --</option>';
        foreach ($states as $state){
            $data.='<option value="'.$state->id.'">'.$state->name.'</option>';
        }
        $data.='</select>';
        return $data;
    });
});