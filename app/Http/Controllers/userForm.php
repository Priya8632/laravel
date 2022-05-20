<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class userForm extends Controller
{
    function getdata(Request $records)
    {
        $records->validate([
            'first_name' => 'required | min:5 | max:10 | alpha',
            'last_name' => 'required | min:5 | max:13 | alpha',
            'email' =>"required",
            'password' => 'required',
            'confirm_password' => 'required | same:password',
            'mobile_no' => 'required | numeric',
            'gender' => 'required',
            'age' => 'required | numeric',
            'city' => 'required | in:Surat,Rajkot,Amreli,Vadodara,Valsad',
            'pincode' => 'required | numeric',
            'hobby' => 'required',
            'image' => 'required'
        ]);

        $hobby = implode(", ", $records->input('hobby'));
        $fileName = $records->file('image')->getClientOriginalName();
        $img_path = $records->file('image')->move('photos', $fileName);



        DB::table("customers")->insert([
            "first_name" => $records->input('first_name'),
            "last_name" => $records->input('last_name'),
            "email" => $records->input('email'),
            "password" => $records->input('password'),
            "mobile_no" => $records->input('mobile_no'),
            "gender" => $records->input('gender'),
            "age" => $records->input('age'),
            "pincode" => $records->input('pincode'),
            "city" => $records->input('city'),
            "hobby" => $hobby,
            "image" => $img_path

        ]);

        return redirect('Login');
    }
}
