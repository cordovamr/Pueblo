<!doctype <!DOCTYPE html>
<html>
<head>
	<title>New Game Form</title>
</head>
<body>
<form action="/addGame" method="POST">
	{!! csrf_field() !!} <!--this will create input with the token as the value-->
<label>Game Title: <input type="text" name="name"></label>
<label>Year: <input type="text" name="year"></label>
<input type="submit" value="submit">
<a href="/games">Cancel</a>
</body>
</html>