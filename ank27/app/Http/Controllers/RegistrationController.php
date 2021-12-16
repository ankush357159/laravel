<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function showform()
    {
        return view('registration');
    }

    function signup(Request $request)
    {
        //Single rule validation
        // $validate = $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
        // //Multiple rule validation
        // $validate = $request->validate([
        //         'email' => ['required','min:20'],
        //         'password' => ['required'],
        //     ]);

          //Multiple rule validation using | delimiting string
          $validate = $request->validate([
            'email' => 'required | min:20',
            'password' => 'required',
        ]);


        print_r('Form validated');
        $input = $request->except('_token');
        // print_r($input);
        return view('registration', ['data' => $input]);
    }
}
