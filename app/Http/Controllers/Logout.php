<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logout extends Controller
{
    function logout(){
        if (session()->has('email')) {
            session()->pull('email');
            return redirect('Login');
        }
        if (session()->has('admin')) {
            session()->pull('admin');
            return redirect('Login');
        }
    }
}
