<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use App\Models\Customer;

class employee extends Controller
{
    function employee_data()
    {
        $users =  FacadesDB::select("select * from customers");
        return view('users.admin_dashboard',["records" => $users]);

    }
}
