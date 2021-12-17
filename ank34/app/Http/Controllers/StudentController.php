<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show() {
        $students = DB::table('student_table')->paginate(1);
        // dd($students);
        return view('student', ['students'=>$students]);
    }
}
