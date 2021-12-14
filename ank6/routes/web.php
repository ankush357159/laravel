<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome', ['name'=>'Sonam']);
});

Route::get('product', [ProductController::class, 'show']);