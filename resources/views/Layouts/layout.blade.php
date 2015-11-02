<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="device-width initial-scale=1">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css">
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">

<title>Template for my website pages- Pueblo</title>
<style type="text/css">
		body {
			background-image: url('books.jpg');
			background-repeat: no-repeat;
			background-size: 100%;
			
		}
		.outer-container {
			max-width: 960px;
			margin: 0 auto;
			box-shadow: 0 0 20px #000;
		}
		
		.hero {
			border-bottom: solid #663F93 2px;
			padding-top: 20px;
			background-color: #34BC00;


		}
		.photos {
			display: flex;
			width: 100%;
			background-color: #5EB32E;

		}
		#dusty {
			flex: 1;
			height: 250px;
			padding: 5px;
			
		}
		 #pto {
			flex: 2;
			padding: 5px;
		}

		nav {
			background-color: white;
			padding: 10px;
			border-bottom: solid #663F93 1px;
		}
		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			/*justify-content: space-around;*/

		}
		nav li {
			flex: 1 0 auto;
			text-align: center;
		}
		nav li a {
			text-decoration: none;
			color: #663F93;
		}

		
		.mid-section {
			display: flex;
			
			width: 100%;
			
		}
		aside {
			text-align: center;
			content: center;
		}
		.calendar-title {
			border-style: solid white 1px;
			border-radius: 50%;
			color: #34BC00;

		}
		.left-column{
			background-color: #5C0DB4;
			flex: 1;
			opacity: .75;
			
		}
		.middle-column {
			background-color: #5C0DB4;
			opacity: .75;
			flex: 2;

		}
		.why {
			color: #34BC00;
		}
		.aboutpto {
			margin: 0px 5px 0px 5px;
		}
		.bottom-section {
			background: linear-gradient(#5C0DB4, #5EB32E);
			opacity: .5;
			text-align: center;

		}
		table {
			padding-left: 85px;
			border: 1px 0px 1px 0px;

		}
		#pp {
			color: white;
		}

	</style>
</head>
<body>


	<div class="outer-container">
		<div class ="hero">
			
			<nav class="menu">

				<ul>
					<li><a href="/home">Home</a></li>
					<li><a href="/volunteerview">Volunteer</a></li>
					<li><a href="/fundraisers">Fundraisers</a></li>
					<li><a href="#">Donate</a></li>
					<li><a href="#">Store</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="photos">
				<img id="dusty" src="hands.jpg">
				<img id="pto" src="pto.jpg">
				
			</div>
			
			
		</div>
		
		<section class="mid-section">
			<aside class="left-column">
				@yield('calendar')
				
			</aside>
<!--This is the mid-container that includes the aside column with calendar, and content box that changes per page-->				

			<div class="middle-column">
				<div class="pto_text">
					@yield('middle-top')
					
				</div>

				<div>			

					<h1>@yield('title')</h1>
					<p class="aboutpto">@yield('content')</p>

				</div>	
			</div>
			<div class="right-column">
				<div>
					@section('fundraising-links')
				</div>
				put in icons with links here across all pages
				<img src=""<a href="http://www.boxtops4education.com/"></a>
				scripts
				amazon

			</div>
	</section>

		

		<div class="bottom-section">
			<div>
				
				<a href="https://concrete.susd.org/">Scottsdale Unified School District</a>
				<a href="http://scottsdale.nutrislice.com/menu/pueblo">Breafast/Lunch Menu</a>
			</div>

				<form class="innersearch">
					<input type="text" name="search" placeholder="Search";>
					<button class="button">Search</button>
				</form>
		</div>

	</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script> 
</body>
</html>