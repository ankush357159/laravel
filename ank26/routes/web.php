<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegistrationController::class, 'showForm']);
Route::post('/', [RegistrationController::class, 'signup']);

Route::view('olddata', 'olddata')->name('old');