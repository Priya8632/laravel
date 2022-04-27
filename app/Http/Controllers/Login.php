<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function loginuser(Request $req)
    {
        // $req->validate([
        //     'email' => 'required | email',
        //     'password' => 'required'
        // ]);

        return $req->input();
    }
}
