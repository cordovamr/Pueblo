<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content-width=""
	<title>Template for my website pages- Pueblo</title>
	<link rel="stylesheet" href="styles.css">
		<style type="text/css">
		header {
			background-color: blue;
		}
		aside {
			background-color: gray;
		}
		section {
			background-color: yellow;
		}
		nav {
			background-color: purple;

		}
		ul {
			background-color: red;
		}
		li {
			background-color: lime;
		}
		</style>
</head>
<body>

	<header>
		<img src="pueblodusty.jpg">
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
			<iframe src="https://www.google.com/calendar/embed?src=df7h9c4d76c8f7iv0negnsft7g%40group.calendar.google.com&ctz=America/Phoenix" style="border: 0" width="480" height="300" frameborder="0" scrolling="no"></iframe>

				<h1>@yield('main-content')</h1>
			</main>
	</section>

</body>
</html>