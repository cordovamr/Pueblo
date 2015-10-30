@extends ('Layouts/layout')

<h1>Edit Your Info Here</h1>

<form action="/editVolunteer/{{ $volunteer['volunteerId']}}" method="POST">
	{!! csrf_field() !!} <!--this will create input with the token as the value-->
<label>First Name: <input type="text" name="firstName" value="{{ $volunteer['firstName']}}"></label>
<label>Last Name: <input type="text" name="lastName" value="{{ $volunteer['lastName']}}"></label>

<label>Email: <input type="email" name="email" value="{{ $volunteer['email']}}"></label>
<input type="submit" value="submit">

