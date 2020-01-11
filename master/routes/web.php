<?php

use Illuminate\Support\Facades\Route; 


/*
|---------------------------------------------------------------------------
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
Route::get('/home/create','HomeController@create');
Route::post('/home','HomeController@store');
Route::get('/home/{post}','HomeController@show')->name('home/show');
Route::get('/home/{post}/edit','HomeController@edit')->name('home/edit');
Route::put('/home/{post}','HomeController@update')->name('home/update');
Route::delete('/home/{post}','HomeController@destroy');

