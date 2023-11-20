<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CentersController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DeliveriesController;
use App\Http\Controllers\GrantsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\StocksController;
use App\Models\Item;
use App\Models\Stock;
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

Route::get("login",[AuthController::class,'login'])->name('login');
Route::get("dashboard",[Controller::class,'dashboard'])->name('dashboard');



Route::get("supplier/pending",[StocksController::class,'pending']);
Route::get("supplier/done",[StocksController::class,'done']);
Route::post("login",[AuthController::class,'login_attempt']);
Route::get("logout",[AuthController::class,'logout']);





Route::group(['middleware'=>["auth","role:teacher"]],function() {
    Route::get("current",[StocksController::class,'current']);
    Route::get("assigned",[Controller::class,'assigned']);


    Route::get('consumption',[Controller::class,'consumption_index']);
    Route::get('consumption/history',[Controller::class,'consumption_view']);
    Route::post('consumption/history',[Controller::class,'consumption_view']);
    Route::post('consumption',[Controller::class,'consumption_store']);


    Route::get('purchase',[Controller::class,'purchase_index']);
    Route::post('purchase',[Controller::class,'purchase_store']);
    Route::get('purchase/history',[Controller::class,'purchase_view']);
    Route::post('purchase/history',[Controller::class,'purchase_view']);
    Route::resource("deliveries",DeliveriesController::class);
});

Route::group([ "middleware" => ["auth","role:admin"]], function () {
    Route::resource("categories",CategoriesController::class);
    Route::resource("centers",CentersController::class);
    Route::resource("items",ItemsController::class);
    Route::resource("grants",GrantsController::class);
    Route::resource("stocks",StocksController::class);
    Route::get("centers/{id}/consumption",[CentersController::class,'consumption_view']);
    Route::get("centers/{id}/stock",[CentersController::class,'stock_view']);
    Route::post("centers/{id}/consumption",[CentersController::class,'consumption_view']);
    
    
    Route::get('getItem/{id}',function($id){
        $states = Item::where('category_id',$id)->get();
        $data='<select class="form-control default-select wide state state-list"  name="item_id" required><option value="">-- Select Item --</option>';
        foreach ($states as $state){
            $data.='<option value="'.$state->id.'">'.$state->name.'</option>';
        }
        $data.='</select>';
        return $data;
    });
});

Route::group([ "middleware" => ["auth"]], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    });
});