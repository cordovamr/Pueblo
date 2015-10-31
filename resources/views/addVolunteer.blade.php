<!doctype <!DOCTYPE html>
<html>
<head>
	<title>New Volunteer Form</title>
</head>
<body>
<form action="/addVolunteer" method="POST">
	{!! csrf_field() !!} <!--this will create input with the token as the value-->
<label>First Name: <input type="text" name="name" placeholder="First Name"></label>
<label>Last Name: <input type="text" name="name"placeholder="Last Name"></label>

<label>Email: <input type="email" name="email" placeholder="Email"></label>
<input type="submit" value="submit">
<a href="/volunteers">Cancel</a>
</body>
</html>