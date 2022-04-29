<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Amount;
use App\Http\Controllers\maths_operation;
use App\Http\Controllers\mobile_details;
use App\Http\Controllers\maths_operation2;
use App\Http\Controllers\displaytext;
use App\Http\Controllers\userForm;
use App\Http\Controllers\Login;
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

Route::view('/','users.Home');
Route::post("userForm",[userForm::class,"getdata"]);
Route::post('Login',[Login::class,'loginuser']);
Route::view("userForm","users.userForm");
Route::view('Login','users.Login');
Route::view('Product','users.Product');

Route::fallback(function () {
    return view('users.Default');
});

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
// Route::get('/file4', function(){
//     return view('file4');
// });
// Route::get('/file5', function(){
//     return view('file5');
// });
// Route::get('/file6', function(){
//     return view('file6');
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
Route::get('/welcome', function(){
    return view('welcome');
});

// Route::get("Amount/{amount}",[Amount::class,"check"]);

// Route::get("maths_operation",[maths_operation::class,"maths"]);
// Route::get("maths_operation",[maths_operation::class,"fun6"]);

// Route::get("mobile_details/{phone}",[mobile_details::class , "mobile"]);

// Route::get("maths_operation2/{num}",[maths_operation2::class,"check"]);
// Route::get("maths_operation2/{user}/{pass}",[maths_operation2::class,"fun7"]);



// Route::get("displaytext/{ans}",[displaytext::class,"fun1"]);
// Route::get("displaytext",[displaytext::class,"fun2"]);
// Route::get("displaytext",[displaytext::class,"fun3"]);
// Route::get("displaytext/{fruit}",[displaytext::class,"fun4"]);
// Route::get("displaytext/{n1}/{n2}",[displaytext::class,"fun5"]);
