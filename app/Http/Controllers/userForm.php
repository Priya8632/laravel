<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userForm extends Controller
{
    function getdata(Request $req)
    {
        $req->validate([
        'first_name' => 'required | min:3 | max:10 | alpha',
        'last_name' =>'required',
        'email' => 'required',
        'password' => 'required | email',
        'confirm password' => 'required | numeric',
        'mobile no' => 'required | numeric',
        'age' => 'required',
        'pincode' => 'required',
        'gender' => 'required',
        'city' => 'required'
    
    ]);

        return $req;
    }
}
