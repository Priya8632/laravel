<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class displaytext extends Controller
{
    function fun1($ans)
    {
        return view("file10",["data" => $ans]);
    }
    function fun2()
    {
        $data = ['kinal','priya','krisha','tina'];
        return view("file9" , ["users" => $data]);
    }
    function fun3()
    {
        $data = 20 + 30; 
        return view("file8",["result" => $data]);
    }
    function fun4($fruit)
    {
        return view("file7" ,["result" => $fruit]);
    }
    function fun5($n1,$n2)
    {
        return view("file7",["data" => $n1+$n2]);
    }
}
