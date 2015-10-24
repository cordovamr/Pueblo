<!DOCTYPE html>
<html lang="en">
<head>
	<title>Template for my website - Pueblo</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>

	<main>	
		<header class="page-header">
			Pueblo PTO
			<script><img src="{{ URL::asset('pueblodusty.jpg') }}" width="100%"></script>
		</header>
			<h1>Pueblo Elementary</h1>
		<section>
				<nav>

					<ul>
						<li></li>
						<li></li>
						<li></li>
					</ul>

				</nav>
			<section>
				<h1>@yield('main-content')</h1>
			</section>
		</section>
	</main>	
<script src="js/bootstrap.min.js"></script>
</body>
</html>