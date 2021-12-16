<?php

use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/stock', function () {
    return view('stock');
})->middleware('construction');
Route::get('/report', function () {
    return view('report');
})->middleware('construtGroup');

// Route::get('report', [ReportController::class, 'show']);