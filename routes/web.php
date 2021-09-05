<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[HomeController::class,'home']);
Route::get("/terms-conditions",[HomeController::class,'terms']);
Route::get("/privacy-policy",[HomeController::class,'privacy']);


//pacage
Route::get("/buy/pack/{name}",[HomeController::class,'buypack']);
Route::post("/buy_pack",[HomeController::class,'buypack']);



//contact
Route::post("/contactemailmessage",[ContactController::class,'sendEmail']);



Route::group(['middleware'=>['auth:sanctum','verified','accessrole',]],function(){

    //home
    Route::get("/author",[AdminController::class,'adminhome']);

    //pacage

    Route::get("/package",[AdminController::class,'package']);
    Route::get("/package/{name}",[AdminController::class,'package']);
    Route::post("/create_pack",[AdminController::class,'package']);
    Route::post("/update_pack",[AdminController::class,'package']);
    Route::post("/del_pack",[AdminController::class,'package']);

    //sell pack
    Route::get("/pending/record",[AdminController::class,'ordershow']);
    Route::get("/pending/record/{sleep}",[AdminController::class,'pendingapprove']);
    Route::post("/up_paymentamount",[AdminController::class,'ordershow']);
    //Route::get("/confirm/record",[AdminController::class,'confirmedorder']);

//Reffer
    Route::get("/reffer",[AdminController::class,'reffer']);
    Route::post("/create_reffer",[AdminController::class,'reffer']);


 });
