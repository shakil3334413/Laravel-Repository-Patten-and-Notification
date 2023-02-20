<?php

use App\Http\Controllers\CustomerController;
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
    return view('welcome');
});


Route::get('customer',[CustomerController::class,'index']);
Route::get('customer/{customerId}',[CustomerController::class,'show']);
Route::get('customer/{customerId}/update',[CustomerController::class,'update']);
Route::get('customer/{customerId}/delete',[CustomerController::class,'destroy']);