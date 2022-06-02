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
            'email' => "required",
            'password' => 'required',
            'confirm_password' => 'required | same:password',
            'mobile_no' => 'required | numeric',
            'gender' => 'required',
            'age' => 'required | numeric',
            'city' => 'required | in:Surat,Rajkot,Amreli,Vadodara,Valsad',
            'pincode' => 'required | numeric',
            'hobby' => 'required',
            'image' => 'required',
        ]);

        $hobby = implode(", ", $records->input('hobby'));
        $fileName = $records->file('image')->getClientOriginalName();
        $img_path = $records->file('image')->storeAs('images', $fileName);
        
        // $folderName = $records->input('folderName');

        // if (isset($folderName)) {

        //     if ($records->input('fileName') == 'original') {
        //         $img_path = $records->file('image')->storeAs($folderName, $fileName,'uploads');
        //     } else {

        //         $img_path = $records->file('image')->store($folderName,'uploads');
        //     }
        // } else {

        //     if ($records->input('fileName') == 'original') {
        //         $img_path = $records->file('image')->storeAs('images', $fileName,'uploads');
        //     } else {

        //         $img_path = $records->file('image')->store('images','uploads');
        //     }
        // }


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

        return redirect('login')->with('status','you are successfully ragistered..');
    }

    function distroy($id){
        DB::table('customers')->where('cust_id',$id)->delete();
        return redirect("admin_dashboard");
    }

    function edit($id){
        $data =   DB::table('customers')->where('cust_id', $id)->get();
        return view('users.update', ['data' => $data]);
    }

    function update(Request $records, $id)
    {
        $records->validate([
            // "first_name" => "required | min:3 | max:10 | alpha",
            // "last_lame" => "required | min:3 | max:10 | alpha",
            // "email" => "required", 
            // "password" => "required",            # Custom Validation Rule using Rule Objects
            // "mobile_no" => "required | numeric",                  # Custom Validation Rule using Closures
            // "gender" => "required",
            // "age" => "required",
            // "pincode" => "required",
            // "city" => "required",                     # regex 
            // "hobby" => "required",
            // "image" => "required"
        ]);

        $img_path = "";
        $hobby = implode(", ", $records->input('hobby'));
        if (!file_exists($records->file('image'))) {
            $img_path = DB::table('users')->where('id',$id)->value('image');
        }else{
            $fileName = $records->file('image')->getClientOriginalName();
            $img_path = $records->file('image')->storeAs('photos', $fileName, 'uploads');
        }

        // $hobby = implode(", ", $records->input('hobby'));
        // $fileName = $records->file('image')->getClientOriginalName();
        // $img_path = $records->file('image')->storeAs('images', $fileName);

        DB::table('customers')->where('cust_id', $id)->update([
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

        return redirect("admin_dashboard");
    }
}
