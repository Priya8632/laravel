<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Amount;
use App\Http\Controllers\maths_operation;
use App\Http\Controllers\mobile_details;
use App\Http\Controllers\maths_operation2;

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
    return view('file1');
});
Route::get("Amount/{amount}",[Amount::class,"check"]);
Route::get("maths_operation",[maths_operation::class,"maths"]);
Route::get("mobile_details/{phone}",[mobile_details::class , "mobile"]);
//Route::get("mobile_details/{index}",[mobile_details::class , "details"]);
Route::get("maths_operation2/{num}",[maths_operation2::class,"check"]);