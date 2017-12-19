<?php session_start(); ?><!doctype html>
<html lang="en">
<head>
	<title>FashionMekka</title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<!-- Font stylesheet -->	
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <!-- Own stylesheet -->
     <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body id="secret">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
			</div>
			<p id="carouseltext">‟ Life is to short to wear boring clothes ”</p>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="createuser.php">Create user</a>
					</li>
					<li>
						<a href="loggin.php">Log in</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-ride="carousel" id="myCarousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
			<li data-slide-to="1" data-target="#myCarousel"></li>
		</ol><!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img alt="Image" src="img/streetfashion.jpg">
				<div class="carousel-caption">
					<h3 id="header">FASHIONMEKKA</h3>
				</div>
			</div>
			<div class="item">
				<img alt="Image" src="img/info3.png">
				<div class="carousel-caption">
					<p id="infotext">With FashionMekka you can get exclusive opportunities on second hand clothing items for both men and women. Sell and buy unique clothing for everyday life, events, holidays and sports. Join now and se the endless opportunities that can end up in your closet, as well as helping the environment by being eco-friendly and reuse.</p>
				</div>
			</div>
		</div><!-- Left and right controls -->
		 <a class="left carousel-control" data-slide="prev" href="#myCarousel" role="button"><span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" data-slide="next" href="#myCarousel" role="button"><span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span></a>
	</div><br>
	<footer class="container-fluid text-center">
		<p>Follow our social media for more updates:<br>
		Instagram: @FashionMekka<br>
		Facebook: fashionmekka<br></p>
	</footer>
</body>
</html>