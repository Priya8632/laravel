<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class employee extends Controller
{
    function employee_data()
    {
        $users =  customer::paginate(5);
        return view('users.admin_dashboard',["records" => $users]);

    }
}
