<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show() {
        $websiteName = 'ClickCart';
        $user = 'Admin';
        $userType = $user == 'Admin' ? true : false;
        return view('product', ['wn'=>$websiteName, 'userType'=>$userType]);
    }
}
