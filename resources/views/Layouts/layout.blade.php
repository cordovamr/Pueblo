<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content-width="">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
	<style type="text/css"></head>
	<title>Template for my website pages- Pueblo</title>

		header {
			background-color: #663F93;
		}

		nav {
			background-color: #663F93
		}
		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			background-color: #663F93;
			display: flex;
			justify-content: space-around;

		}
		nav li {
			flex: 1 0 auto;
			text-align: center;
		}
		nav li a {
			text-decoration: none;
			color: white;
		}

		form {
			position: absolute;
			top: 235px;
			right: 10px;
		}
		
		#dusty {
			width: 100%;
			height: 250px;
			background-color: gray;
		}
		.container {
			display: flex;
			padding: 15px;
			background-color: black;
		}
		.left-column{
			background-color: gray;
			flex: 1;
			margin-right: 20px;
			padding: 5px;
		}
		.middle-column {
			background-color: yellow;
			flex: 2;
			padding: 5px;
		}
		main {
			background-color: white;
		}
		.right-column {
			background-color: red;
			flex:1;
			margin-left: 20px;
			padding: 5px;
		}
		
		</style>
</head>
<body>

	<header>
		<img id="dusty" src="pto.jpg"><form class="innersearch">
			<input type="text" name="search" placeholder="Search";>
			<button class="button">Search</button>
		</form>
		
		
			<nav>
				<ul>
					<li><a href="#">Home</li>
					<li><a href="#">Volunteer</li>
					<li><a href="#">Fundraisers</a></li>
					<li><a href="#">Donate</a></li>
					<li><a href="#">Store</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		
		
	</header>
	<div class="container">
		<aside class="left-column">
			
			<iframe src="https://calendar.google.com/calendar/embed?showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=df7h9c4d76c8f7iv0negnsft7g%40group.calendar.google.com&amp;color=%23cc19c6&amp;ctz=America%2FPhoenix" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="yes"></iframe>></iframe>
			
		</aside>

		<section class="middle-column">
			<div>
				slick carousel
			</div>

			<div>			

				<h1>@yield('main-content')</h1>
				Why Join Pueblo’s PTO?

				Your donation helps the PTO enhance our children’s educational experience and reduce fundraisers.

				Pueblo PTO is a 501(c)3 non-profit organization – your donation is 100% tax deductible. Please drop off cash or check payable to: Pueblo PTO at Pueblo Front Office.

				Schedules are busy for everyone…but being involved in our children’s education is important. Don’t be afraid to sign up to be a volunteer, there are lots of fundraisers and school events throughout the year. The more people we have, the better our community will be which will only benefit OUR children.

				Who Can Join the PTO?

				Parents – padres
				Teachers- maestros
				Grandparents – abuelos
				Aunts – tia’s
				Uncles – tio’s
				Neighbors – vecinos

				PTO meetings are typically the first Tuesday of every month at 6:00pm at the library – please check our calendar for specific dates.
								
			</div>
		</section>

		<section class="right-column">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</section>
	</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

</body>
</html>