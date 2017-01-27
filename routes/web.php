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

use Illuminate\Http\Request;

// Homepage
Route::get('/', function () { return view('homepage'); });

// Guides
Route::get('guides', 'GuideController@index');
Route::get('guide', function () { return redirect('guides'); });
Route::resource('guide', 'GuideController', ['except' => ['index']]);

//Items
Route::get('/items', 'ItemController@items');
Route::get('/item/{slug}', 'ItemController@item');

//Sets up Auth routes e.g. login, register
Auth::routes();
Route::get('/my-account', 'HomeController@index');
