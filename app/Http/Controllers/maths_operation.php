<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maths_operation extends Controller
{
    function maths()
    {
        $limit = 8;
        $n1 = 0;
        $n2 = 1;

        $counter = 0;
        for($i = 0; $i<=$limit; $i++)
        {
            echo $n1 . "+";
            $n1 = $n1+$n2; //1
            $n2 = $counter;
            $counter = $n1;    
        }
    }
}
