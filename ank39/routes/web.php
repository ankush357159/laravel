<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('add_customer', [CustomerController::class, 'add_customer']);
Route::get('show_mobile/{id}', [CustomerController::class, 'show_mobile']);
