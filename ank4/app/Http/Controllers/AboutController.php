<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Controller returing string
    // function show() {
    //     return "Hello controller";
    // }

    // function show($name) {
    //     return "Hello controller " . $name;
    // }

    // function show() {
    //     return view('aboutme');
    // }

    //Controller returning view with parameter
    // function show($name) {
    //     return view('aboutme', ['nm'=>$name]);
    // }

    //Passing data from controller to view
    // function show(){
    //     $name = "Deepak"; 
    //     return view('aboutme', ['nm'=>$name]);
    // }

    function show1(){
        $name = "Deepak"; 
        return view('aboutme', ['nm1'=>$name]);
    }

    function show2(){
        $name = "Suraj"; 
        return view('aboutyou', ['nm2'=>$name]);
    }
}
