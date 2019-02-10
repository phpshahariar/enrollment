<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student_dashboard(){
        return view('enrollment.student.student-dashboard');
    }
}
