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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>'userCheck'],function(){
    Route::get('/', 'formController@show')->name('data.show');
    Route::post('/','formController@store')->name('data.store');

    Route::get('/task/{id}/edit','formController@edit')->name('data.edit.show');
    Route::post('/task/{id}/edit','formController@update')->name('data.update');

    Route::get('task/{id}/delete','formController@delete')->name('data.delete');
    Route::get('/logout','loginController@logout');
});


Route::get('/register','registerController@show')->name('user.register.show');
Route::post('/register','registerController@register')->name('user.register');

Route::get('/login','loginController@show')->name('user.login.show');
Route::post('/login','loginController@login')->name('user.login');

