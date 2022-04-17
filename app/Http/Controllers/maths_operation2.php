<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maths_operation2 extends Controller
{
    function check($num)
    {
        // if($num%2 == 0)
        // {
        //     echo "num is even  ". $num ;}
        // else
        // {
        //     echo "num is odd  " .$num ;}
        $n1 = 10;
        $n2 = 20;
        echo "num1 is : 10 <br>";
        echo "num2 is : 20 <br>";
        switch($num){
            case 1:
                $addition = $n1 + $n2;
                echo "addition is : ". $addition;
                break;
            case 2:
                $substration = $n1 - $n2;
                echo "substration is : ".$substration;
                break;
            default:
            echo "this number is not same as your condition";

    }
}
    // function fun7($user,$pass)
    // {
    //     return view("file1",["info" => $user,$pass]);
    // }
}
