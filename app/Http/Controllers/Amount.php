<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Amount extends Controller
{
    function check($amount)
    {
        echo "net amount = " . $amount ."<br>";
        echo " interest 12% = ".$amount*12/100 ."<br>";
        echo " year =  15 <br>";
        $result = $amount *12*15/100;
        echo "Total amount =". ((int)$result + (int)$amount);
    }
}
