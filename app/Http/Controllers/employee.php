<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class employee extends Controller
{
    function employee_data($num = 5)
    {
        $users =  customer::paginate($num);
        return view('users.admin_dashboard',["records" => $users]);

    }
}
