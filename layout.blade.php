<!DOCTYPE html>
<html>
<head>
	<title>Template for my website - Pueblo</title>
	<link rel="stylesheet" type="text/css" href="normalize.css"><link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<header>
		@section('header')
		default header here
		@show
	</header>

	<aside>
		@section('sidebar')
		This is the master sidebar for google calendar widgets, importable to user's calendar.	
		@show
	</aside>

	<section>
		
			<nav>
				<ul>
					<li>Home</li>
					<li>Education News</li>
					<li>Why Fundraise</li>
					<li>Volunteer</li>
					<li>Donate</li>
					<li>Store</li>
					<li>Contact</li>
				</ul>

			</nav>

			<form class="innersearch">
				<input type="text" name="search" placeholder="Search";>
				<button class="button">Search</button>
			</form>
			<main>
				<h1>@yield('main-content')</h1>
			</main>
	</section>

</body>
</html>