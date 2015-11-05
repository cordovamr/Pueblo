<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="device-width initial-scale=1">
	{{-- <link rel="stylesheet" type="text/css" href="slick/slick.css">
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"> --}}
	<link rel="stylesheet" href="styles.css">
<title>Template for my website pages- Pueblo</title>
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
					<li><a href="/contact">Contact</a></li>
					<li><a href="https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=8x50SC9ZXhl74KGQy5b5qFwUmV7idRQR7WJVzajm0ddqAlbjusAoXuD3pDC&dispatch=5885d80a13c0db1f8e263663d3faee8d64ad11bbf4d2a5a1a0d303a50933f9b2">Donate</a></li>
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
				<div class="space" style="font-size: 36px;">Upcoming Events</div>
				<iframe class="grow" id="calendar" src="https://calendar.google.com/calendar/embed?src=df7h9c4d76c8f7iv0negnsft7g%40group.calendar.google.com&ctz=America/Phoenix" style="border: 0" width="300" height="300" frameborder="0" scrolling="no"></iframe>
				@yield('post-calendar')
			</aside>

<!--This is the break to the mid-container that includes three columns-->				
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
				<div>@section('fundraising-links')
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
					<div class="imgcontainer" id="grow">
						<a href="https://www.facebook.com/Pueblo-Elementary-PTO-118163371565133/">
						<img src="fb.jpg" id="fb">
						</a>
					</div>
					<div class"susd-lunch">
						<div>
						<a href="https://concrete.susd.org/" style="color: white; text-decoration: none;">Scottsdale Unified School District</a>
						<a href="http://scottsdale.nutrislice.com/menu/pueblo/" style="color: white; text-decoration: none;">Breafast/Lunch Menu</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="bottom-section">
			
		</div>
	</div><!--close outer container-->

<script src="js/jquery.min.js"></script>
<script src="slick/slick.min.js"></script> 

</body>
</html>