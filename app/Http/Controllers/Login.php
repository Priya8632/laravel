<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    function loginuser(Request $req)
    {
        $req->validate([
            'email' => 'required | email',
            'password' => 'required'
        ]);

        $data = $req->input();
        $req->session()->put('user',$data);
        return redirect('dashboard');
    }

     
}
