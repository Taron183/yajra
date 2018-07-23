<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Datatables;

class AjaxDataController extends Controller
{
    public function index()
    {
        return view('student.ajaxdata');
    }

    public function getdata()
    {
        $students = Student::select('first_name', 'last_name');
        return Datatables::of($students)->make(true);
    }
}
