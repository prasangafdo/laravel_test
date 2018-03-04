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


Route::get('/rel', function(){
    $students = \App\Students::all();

    return view('students.temp', ['students'=>$students]);
    });
/*
Route::get('/prasanga', function () {
    //return "<h1 class = text-danger> This is Prabodha on \"prasanga route\"</h1>"; //This prints the keywords.
    return view('home');//This navigates to the Home panel (Warning! Login scripts aren't included here.)
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//We only need one of these. 

//Configuring controllers
//Partial resource routes
Route::resource('users', 'UsersController');
Route::resource('students', 'StudentsController');
Route::resource('userRole', 'UserRoleController');
Route::resource('termFees', 'TermFeesController');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
