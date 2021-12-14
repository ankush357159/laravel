<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function() {
//     return view('aboutme');
// });

Route::view('about', 'aboutme');

Route::get('/admin', function() {
    return view('admin.profile');
});

Route::get('/contact', function() {
    return view('contactme',['name'=>'Kamal', 'roll'=>101]);
});

Route::get('/contact', function() {
    return view('contactme')->with('name','Kamal');
});