<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function show() {
        $name = 'Sonam';
        $students = ['Amar', 'Rahul', 'Sonam'];
        return view('contact', ['nm'=>$name, 'students'=> $students]);
    }

   
}
