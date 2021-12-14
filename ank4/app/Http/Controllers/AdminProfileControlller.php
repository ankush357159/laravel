<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileControlller extends Controller
{
    function show_profile() {
        return view('admin.myprofile');
    }
}
