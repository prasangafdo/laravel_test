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

Route::get('/prasanga', function () {
    //return "<h1 class = text-danger> This is Prabodha on \"prasanga route\"</h1>"; //This prints the keywords.
    return view('home');//This navigates to the Home panel (Warning! Login scripts aren't included here.)
});

Route::get('/prasanga2', function(){
    return "<h2>This is Prasanga2</h2>";
});

Route::get('/users_extracted', function () {
    $users = App\User::all();
    foreach ($users as $user) {
    	echo $user->last_name;
    }//This echos the last_name in the user table (Extracted from json format)
});

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
