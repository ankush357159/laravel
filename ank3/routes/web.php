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


Route::get("/about", function() {
    return view('about');
});

Route::get('user/{hello}', function($id) {
    return view('user', ['id'=>$id]);
});

Route::get('post/{post_id}/comment/{comment_id}', function($post_id, $comment_id) {
    return view('mypost',['post_id'=>$post_id, 'comment_id'=>$comment_id]);
});

Route::get('example/{test_id}/{example_id}', function($test_id, $example_id) {
    return view('example', ['test_id'=>$test_id, 'example_id'=>$example_id]);
});

// Route::get('another/{news?}', function($news = null) {
//     return "Another: " . $news;
// });

Route::get('another/{news?}', function($news = 'Work') {
    return "Another: " . $news;
});

Route::get('product/{name}', function($name){
    return "Product Name: " . $name;
})-> where('name', '[a-zA-Z]+');

Route::get('hotel/{name}/{room}', function($name, $room) {
    return "Name of hotel: " . $name . " , "  . "Room No: " . $room;
})-> where(['name' =>'[A-Za-z]+', 'room'=>'[0-9]+']);

Route::redirect('here', 'there');

Route::get('there', function() {
    return "Hello there!";
});

Route::permanentRedirect('this1', 'that');

Route::fallback(function() {
    return "<h1>This is defualt message</h1>";
});