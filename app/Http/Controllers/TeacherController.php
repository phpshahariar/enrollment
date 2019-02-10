<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function TeacherDashboard(){
        return view('enrollment.teacher.index');
    }
}
