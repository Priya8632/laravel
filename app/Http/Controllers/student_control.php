<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class student_control extends Controller
{
    function data()
    {
        return Student::all();
    }
}
