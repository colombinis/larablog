<?php

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

// +--------+-----------+------------------+--------------+---------------------------------------------+--------------+
// | Domain | Method    | URI              | Name         | Action                                      | Middleware   |
// +--------+-----------+------------------+--------------+---------------------------------------------+--------------+
// |        | GET|HEAD  | post             | post.index   | App\Http\Controllers\PostController@index   | web          |
// |        | POST      | post             | post.store   | App\Http\Controllers\PostController@store   | web          |
// |        | GET|HEAD  | post/create      | post.create  | App\Http\Controllers\PostController@create  | web          |
// |        | GET|HEAD  | post/{post}      | post.show    | App\Http\Controllers\PostController@show    | web          |
// |        | PUT|PATCH | post/{post}      | post.update  | App\Http\Controllers\PostController@update  | web          |
// |        | DELETE    | post/{post}      | post.destroy | App\Http\Controllers\PostController@destroy | web          |
// |        | GET|HEAD  | post/{post}/edit | post.edit    | App\Http\Controllers\PostController@edit    | web          |
Route::resource('post','PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/otraruta', function(){
    dd('otra ruta');
});

