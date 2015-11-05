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
/*Main pages routes: layout, index, home */
Route::get('welcome', function () {
    return view('/Layouts/welcome', ["date('d,M,Y)"]);
});
Route::get('index', 'VolunteerController@index');
Route::get('calendarcode', 'VolunteerController@calendar');
Route::get('home', 'VolunteerController@index');
Route::get('login', function() {
	return view('login');
});

Route::get('volunteerview', function() {
	return view('volunteerview');
});

Route::get('test', 'EventController@makeCalendar');

Route::get('addVolunteer', 'VolunteerController@addVolunteer');
Route::post('addVolunteer', 'VolunteerController@saveVolunteer');

Route::get('myaccount', function() {
	return view('myaccount');
});

Route::get('/volunteers', 'VolunteerController@getVolunteers');
Route::get('/volunteers/{id}', 'VolunteerController@getVolunteerDetails');

Route::get('/events', 'EventController@getEvents');
Route::get('/events/{eventID}', 'EventController@getEventDetails');

Route::get('fundraisers', 'VolunteerController@fundraisers');

// Route::get('login', function() {
// 	return view('login');
// });
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