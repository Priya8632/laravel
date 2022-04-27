<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userForm extends Controller
{
    function getdata(Request $req)
    {
        $req->validate([
            'first_name' => 'required | min:5 | max:10 | alpha',
            'last_name' => 'required | min:5 | max:13 | alpha',
            'email' => 'required',
            'password' => 'required',
            'confirm_password' => 'required | same:password',
            'mobile_no' => 'required | numeric',
            'age' => 'required | numeric',
            'pincode' => 'required | numeric',
            'gender' => 'required',
            'city' => 'required',
            'hobby' => 'required'
        ]);

        return $req->input();
    }
}
