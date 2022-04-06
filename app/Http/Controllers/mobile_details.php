<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mobile_details extends Controller
{
    function mobile($value)
    {
        $vivo = array("color"=>"black","Ram"=>"4");
        
        if($value == $vivo)
        {
            echo $vivo['color'];
        }
    }
}
