<!DOCTYPE html>
<html>
<head>
	<title>Volunteer Page</title>
	style {
		textarea {
		
		}
	}
</head>
<body>

<h1>Volunteer sign up</h1>
{{ Form::open(array('url' => 'thanks')) }}
	{{ Form::label('email', 'Email Address') }}
	{{ Form::text('email') }}

	
	{{ Form::label('comment', 'Comments') }}
	{{ Form::textarea('comment', '', array('placeholder' => 'What events and/or programs would you like to see at Pueblo?')) }}

	// {{ Form:checkbox('agree', 'yes', false) }}
	// {{ Form::label('agree', 'I agree to your terms of service') }}
	
	{{ Form::submit('Sign Up') }}

	{{ Form::close() }}
	

</body>
</html>
