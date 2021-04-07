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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');

    Route::get('/home', 'UserController@getListUsers');

    Route::post('/form-message', function () {
        return view('messages/form-message');
    });

    Route::post('/save-form-message', 'MessageController@saveFormMessage')->name('save-form-message');

    Route::get('/list-incoming-messages', 'MessageController@getListIncomingMessages');

    Route::get('/list-incoming-messages/{id}', 'MessageController@getMessage')->name('message');

    Route::delete('/delete-message/{id}', 'MessageController@deleteMessage')->name('delete-message');
});
