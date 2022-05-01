<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;


class dbtest extends Controller
{
    function dbCheck()
    {
        return FacadesDB::select("select * from detail");
    }
}
