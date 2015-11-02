@extends ('Layouts/layout')
@section ('middle-top')

	<title>New Volunteer Form</title>

<form action="/addVolunteer" method="POST">
	{!! csrf_field() !!} <!--this will create input with the token as the value-->
	<label>First Name: <input type="text" name="firstName" value="First Name"></label>
	<label>Last Name: <input type="text" name="lastName" value="Last Name"></label>

	<label>Email: <input type="text" name="email" value="Email"></label>
	<input type="submit" value="Enter">
	<a href="/volunteerview">Cancel</a> 

	<div>
	<h1 class"registered">Already registered?</h1>
		<button class="login" type="submit" name="login" value="login">Login</button>
	</div>
</form> 
@endsection

