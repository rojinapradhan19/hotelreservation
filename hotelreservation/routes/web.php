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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/*Route::get('/index', function () {
    return view('index');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/review', function () {
    return view('review');
});*/

Route::get('/', 'NavbarController@index');
Route::get('/index', 'NavbarController@index');
Route::get('/book', 'NavbarController@book');

//Route::get('/','PostController@index');
