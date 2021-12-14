<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminProfileControlller;

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

// Route::get('about', [AboutController::class, 'show']);
// Route::get('about/{name}', [AboutController::class, 'show']);

// Route::get('about', [AboutController::class, 'show']);

Route::get('/profile', [AdminProfileControlller::class, 'show_profile']);

// Route::get('about/{name}', [AboutController::class, 'show']);

// Route::get('about', [AboutController::class, 'show']);
Route::get('about1', [AboutController::class, 'show1']);
Route::get('about2', [AboutController::class, 'show2']);

