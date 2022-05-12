<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Amount;
use App\Http\Controllers\maths_operation;
use App\Http\Controllers\mobile_details;
use App\Http\Controllers\maths_operation2;
use App\Http\Controllers\displaytext;
use App\Http\Controllers\userForm;
use App\Http\Controllers\Login;
use App\Http\Controllers\dbtest;
use App\Http\Controllers\Httpcontroller;
use App\Http\Controllers\usercontroller;

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
#user interface
Route::view('/','users.Home');
Route::view('Home','users.Home');
Route::view('about','users.about');
Route::view('Product','users.Product');
Route::view("userForm","users.userForm");
Route::view('Login','users.Login');
Route::view('data','users.data');
Route::view('info','users.info');
Route::post('userForm',[userForm::class,'getdata']);
Route::post('Login',[Login::class,'loginuser']);


Route::view('priya','priya')->middleware('test');

#fetch data from database through controller with model
Route::get('modal',[usercontroller::class,'data']);

# fetch data from database
Route::get('dbtest',[dbtest::class,'dbCheck']);

#fetch data from Api
Route::get('api',[Httpcontroller::class ,'index']);
#this is deafult route
// Route::fallback(function () {
//     return view('users.Default');
// });
 
Route::group(["middleware" => ["usercheck"]], function(){
    Route::get("group", function () {
        echo 'Welcome to web development group';
    });
    Route::get('php', function () {
        echo "php";
    });

    Route::get('html', function () {
        echo "html";
    });


});






// Route::get('/file3', function(){
//     return view('file3');
// });
// Route::get('/file5', function(){
//     return view('file5');
// });
// Route::get('/file7', function(){
//     return view('file7');
// });
// Route::get('/file8', function(){
//     return view('file8');
// });
// Route::get('/file9', function(){
//     return view('file9');
// });

// Route::get("Amount/{amount}",[Amount::class,"check"]);
// Route::get("maths_operation",[maths_operation::class,"maths"]);
// Route::get("mobile_details/{phone}",[mobile_details::class , "mobile"]);
// Route::get("maths_operation2/{num}",[maths_operation2::class,"check"]);
// Route::get("maths_operation2/{user}/{pass}",[maths_operation2::class,"fun7"]);
// Route::get("displaytext",[displaytext::class,"fun3"]);
// Route::get("displaytext/{n1}/{n2}",[displaytext::class,"fun5"]);
