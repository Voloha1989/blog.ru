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

Route::post('message', function () {
    return view('messages/message');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@index');

Route::get('home', 'UserController@getAll');

Route::post('/contact', 'MessageController@save')->name('contact');

Route::get('/myMessages', 'MessageController@getAll')->name('myMessages');
