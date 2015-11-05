<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="device-width initial-scale=1">
	{{-- <link rel="stylesheet" type="text/css" href="slick/slick.css">
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"> --}}
	
	<link rel="stylesheet" href="styles.css">

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
			background-color: #5C0DB4;
			opacity: .8;
			color: white;
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
			flex: 2;	
		}
		.middle-column {
			flex: 3;
		}
		/*a < img {
			width: 80px;
			overflow: hidden;
			margin: 5px 5px 10px 5px;
		}*/

		#links {
			width: 140px;
			overflow: hidden;
			margin: 5px 5px 10px 5px;
		}
		.grow {
			transition: all .2s ease-in-out; 
		}
		.grow:hover { transform: scale(1.5); 
		}
		
		form {
			background-color: white;
			color: black;
			border-radius: 5px;
			border-bottom-color: red;
			border-style: solid #EEE 1px;
			padding: 10px;
		}
		/*form > * + *{
			padding: 10px;
		}*/
		.right-column {
			flex: 1;
		}
		.why {
			color: #34BC00;
		}
		.aboutpto {
			margin: 0px 5px 0px 5px;
		}
		.bottom-section {
			background-color: #5C0DB4;
			opacity: .5;
			text-align: center;
			color: white;

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
					<li><a href="#">Store</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=TESU0gAHgOmXAMxMz4LEri53B0T-HZg4UhsXO2h5RMgGjQBABjg0efCfQXe&dispatch=5885d80a13c0db1f8e263663d3faee8d64ad11bbf4d2a5a1a0d303a50933f9b2">Donate</a></li>
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
				<iframe src="https://calendar.google.com/calendar/embed?src=df7h9c4d76c8f7iv0negnsft7g%40group.calendar.google.com&ctz=America/Phoenix" style="border: 0" width="300" height="300" frameborder="0" scrolling="no"></iframe>
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
					<div class="imgcontainer" id="grow">
						<a href="http://www.boxtops4education.com/">
						<img src="box-tops.jpg" class="grow" id="links">
						</a>
						<div class="describe">
							<b>Box Tops</b><br>
							Earns $1,200 per year!
						</div>
					</div>
					<div class="imgcontainer">
						<a href="https://smile.amazon.com/">
						<img src="amazon.jpg" class="grow" id="links">
						</a>
						<div class="describe">
							<b>Shopping Gives Back</b><br>
							Earns $1,200 per year!
						</div>
					</div>
				</div>

			</div>
	</section>

		

		<div class="bottom-section">
			<div>
				
				<a href="https://concrete.susd.org/">Scottsdale Unified School District</a>
				<a href="http://scottsdale.nutrislice.com/menu/pueblo">Breafast/Lunch Menu</a>
			</div>

				{{-- <form class="innersearch">
					<input type="text" name="search" placeholder="Search";>
					<button class="btn btn-primary">Search</button>
				</form> --}}
		</div>

	</div>

<script src="js/jquery.min.js"></script>
<script src="slick/slick.min.js"></script> 

</body>
</html>