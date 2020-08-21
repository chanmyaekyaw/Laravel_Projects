<?php

use App\Receipe;

// use Illuminate\Support\Facades\Route;

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


// Route::get('/',function(){
// 	dd(app('test'));
// });
 Route::resource('receipe', 'ReceipeController');
Route::get('/home', 'HomeController@index');
Route::get('/','PublicController@index');
Route::get('detail/{id}','PublicController@show');
Route::resource('category','CategoryController');
// Route::get('/category/{id}','CategoryController@show');
Auth::routes();



