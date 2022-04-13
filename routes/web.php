<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Amount;
use App\Http\Controllers\maths_operation;
use App\Http\Controllers\mobile_details;
use App\Http\Controllers\maths_operation2;
use App\Http\Controllers\displaytext;

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

Route::get('/file1', function () {
    return view('file1');
});
Route::get('/file2', function(){
    return view('file2');
});
Route::get('/file3', function(){
    return view('file3');
});
Route::get('/file4', function(){
    return view('file4');
});
Route::get('/file5', function(){
    return view('file5');
});
Route::get('/file6', function(){
    return view('file6');
});
Route::get('/file7', function(){
    return view('file7');
});
Route::get('/file8', function(){
    return view('file8');
});
Route::get('/file9', function(){
    return view('file9');
});
Route::get('/file10', function(){
    return view('file10');
});

Route::get("Amount/{amount}",[Amount::class,"check"]);

Route::get("maths_operation",[maths_operation::class,"maths"]);
// Route::get("maths_operation",[maths_operation::class,"fun6"]);

Route::get("mobile_details/{phone}",[mobile_details::class , "mobile"]);

Route::get("maths_operation2/{num}",[maths_operation2::class,"check"]);
Route::get("maths_operation2/{user}/{pass}",[maths_operation2::class,"fun7"]);



// Route::get("displaytext/{ans}",[displaytext::class,"fun1"]);
Route::get("displaytext",[displaytext::class,"fun2"]);
Route::get("displaytext",[displaytext::class,"fun3"]);
Route::get("displaytext/{fruit}",[displaytext::class,"fun4"]);
Route::get("displaytext/{n1}/{n2}",[displaytext::class,"fun5"]);

