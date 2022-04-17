<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userForm extends Controller
{
    function getdata(Request $req)
    {
        return $req->input();
    }
}
