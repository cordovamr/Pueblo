<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('welcome', function () {
    return view('/Layouts/welcome', ["date('d,M,Y)"]);
});

Route::get('home', function() {
	return view('home');
});

// Route::get('/home', 'HomeController@index');


Route::get('signup', function () {
	return view('signup');
});

// Route::post('thanks', function() {

// 	$theEmail = Input::get('email');
// 	return View::make('thanks')->with('theEmail', $theEmail);
// });

// these are authorizations routes for the login, logout and register//
