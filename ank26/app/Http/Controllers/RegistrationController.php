<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function showForm()
    {
        return view('registration');
    }

    function signup(Request $request)
    {
        // print_r($request->all());
        // print_r($request->input());
        // print_r($request->input('name'));
        // print_r($request->input('email'));
        // print_r($request->input('password'));
        // if ($request->has('name')) {
        //     print_r($request->input('name'));
        // }
        // $x = $request->input('name');
        // if ($x === 'Sonam') {
        //     print_r('Welome Sonam');
        //     return view('registration');
        // } 
        // if ($request->hasAny(['name', 'email'])) {
        //     print_r($request->input('name'));
        //     print_r($request->input('email'));
        // }
        // if ($request->filled(['name'])) {
        //     print_r($request->input('name'));
        // }
        // if ($request->missing('username')) {
        //     print_r('Username missing');
        // }

        // $request->whenHas('name', function($input) {
        //     print_r('Data modified');
        // });
        $request->flash();
        // $request->flashOnly(['name', 'email']);
        // $request->flashExcept('password');

        // return redirect('olddata')->withInput();
        // return redirect()->route('old')->withInput();
        
       
            // print_r($request->old('name'));
            // print_r($request->old('email'));
            // print_r($request->old('password'));

            // return redirect('olddata')->withInput(
            //     $request->except('password')
            // );
    
        return view('registration');
    }
}
