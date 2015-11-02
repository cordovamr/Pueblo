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

Route::get('calendar', function() {
	return view('calendarMonth');
});
Route::get('home', 'VolunteerController@index');

Route::get('volunteerview', function() {
	return view('volunteerview');
});
Route::get('fundraisers', 'VolunteerController@fundraisers');


Route::get('addVolunteer', 'VolunteerController@addVolunteer');
Route::post('addVolunteer', 'VolunteerController@saveVolunteer');

Route::get('myaccount', function() {
	return "hello this is your account";
});
Route::get('volunteerList', 'VolunteerController@getVolunteers');
Route::get('volunteerDetails', 'VolunteerController@getVolunteerDetails');


Route::get('login', function() {
	return view('login');
});

// Route::get('signup', function () {
// 	return view('signup');
// });

// Route::get('/events', "CalendarController@getEvents");
// Route::get('/events/{id}', "CalendarController@getEventDetails");
// Route::get('/addEvent', "CalendarController@addEvent");
// Route::post('/addEvent', "CalendarController@saveEvent");

// Route::get('/editEvent/{id}', "CalendarController@EditEvent");
// Route::post('/editEvent/{id}', "CalendarController@SaveEdit");
// //API
// Route::post('/api/deleteEvent/{id}', "CalendarController@removeEvent");