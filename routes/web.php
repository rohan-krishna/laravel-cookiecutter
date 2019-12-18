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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('users')->middleware('auth')->group(function() {

    Route::get('/','UserController@index');
    
    Route::get('show/{user}','UserController@show');

    Route::get('create','UserController@create');
    Route::post('store','UserController@store');
    
    Route::get('edit/{user}','UserController@edit')->name('users.edit');
    Route::post('update/{user}','UserController@update');

    Route::get('delete/{user}','UserController@destroy')->name('users.delete');
});


// This is a source code area.
Route::prefix('source-code')->middleware('auth')->group(function() {

});