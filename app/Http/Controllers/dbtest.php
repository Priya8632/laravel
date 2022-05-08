<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;


class dbtest extends Controller
{
    function dbCheck()
    {
        $users =  FacadesDB::select("select * from student_detail");
        return view('users.admin_dashboard',["records" => $users]);

    }
}
