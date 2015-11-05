@extends ('Layouts/layout')
@section ('middle-top')

	<title>New Volunteer Form</title>
<div>
	<form class="col-sm-3" action="/addVolunteer" method="POST">

		{!! csrf_field() !!} <!--this will create input with the token as the value-->

		<h1>Register to Volunteer for Events</h1>
		<div class="form-group">
		<div><label for="firstName">First Name</label></div>
		<input type="text" class="form-control" name="firstName" required placeholder="First Name">
		</div><!--form group-->

		<div class="form-group">
		<div><label for="lastName">Last Name</label></div>
		<input type="text" class="form-control" name="lastName" required placeholder="Last Name">
		</div><!--form group-->

		<div class="form-group">
		<div><label for="email">Email</label></div>
		<input type="email" class="form-control" name="email" required placeholder="Enter Email">
		</div><!--form group-->

		<div class="form-group">
		<div><label for="username">Username</label></div>
		<input type="text" class="form-control" name="username" required placeholder="Enter a Username">
		</div><!--form group-->

		<div class="form-group">
		<div><label for="password">Password</label></div>
		<input type="password" class="form-control" name="password" placeholder="Enter a Password">
		</div><!--form group-->

		<div class="form-group">
		<button type="submit" class="btn btn-success">SUBMIT</button>
		</div>
		<a href="/volunteerview">Cancel</a> 

	</form> 
	<div>
		<h1 class="registered">Already registered? Login</h1>
		<button class="login" action="/login" name="login">Login</button>
	</div>
</div>
@endsection

