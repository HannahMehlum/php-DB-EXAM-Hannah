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
<body id="secret">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">Home</a>
					</li>
					<li>
						<a href="sellclothes.php">Sell clothes</a>
					</li>
					<li>
						<a href="review.php">Review</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="loggout.php">Log out</a>
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
				<img alt="Image" src="img/strretfashion2.jpg">
				<div class="carousel-caption">
					<h3 id="header">FASHIONMEKKA</h3>
				</div>
			</div>
		</div><!-- Left and right controls -->
		 <a class="left carousel-control" data-slide="prev" href="#myCarousel" role="button"><span aria-hidden="true" class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span></a> <a class="right carousel-control" data-slide="next" href="#myCarousel" role="button"><span aria-hidden="true" class="glyphicon glyphicon-chevron-right"></span> <span class="sr-only">Next</span></a>
	</div>
	<h3 id="itemheader">Items</h3>
</body>
</html>

<form action= "#" method="post">
<input class = selectbutton type="submit" name="Female" value="Female">
</form>
    
<?php
    //Extracting data from database from females and displaying it.
    
    if (isset($_POST['Female'])) {
    require_once('dbconnection.php');
    $sql = 'SELECT idClothes, item, size, price, gender, description, imgURL
    FROM Clothes
    WHERE gender = "Female"';
    $stmt = $link->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($clothid, $item, $size, $price, $gender, $description, $imgURL);
    $dirname ="uploads/";
    $images = glob($dirname."*.jpg");
while($stmt->fetch()){ 
    echo '<div style=" border:1px solid black; text-align:left; padding: 5px; padding-top: 5px; font-size:15px;  background-color:white; color:black; width:260px; height: 620px; margin-left: auto; margin-right: auto; margin: 25px; float: left;"><tr><br>
    <td><img src ="'.$imgURL.'" height="300" width="240" </td><br>
    <h3>'.$item.'</h3><br>
    <td>Size:</td> <td>'.$size.'</td><br>
    <td>Price:</td> <td>'.$price.'</td>kr<br>
    <td>Gender:</td> <td>'.$gender.'</td><br>
    <td>Description:</td> <td>'.$description.'</td><br>
    <br>
    <button class="buy" type="button">Buy Item</button><br>
                    
    </tr></div>';
        }
   
}
    
?>
    
<form action= "#" method="post">
<input class = selectbutton type="submit" name="Male" value="Male">
</form>
    
    <?php
    //Extracting data from database from males and displaying it.
    if (isset($_POST['Male'])) {
    require_once('dbconnection.php');
    $sql = 'SELECT idClothes, item, size, price, gender, description, imgURL
    FROM Clothes
    WHERE gender = "Male"';
    $stmt = $link->prepare($sql);
    $stmt->execute();
    $stmt->bind_result($clothid, $item, $size, $price, $gender, $description, $imgURL);
    $dirname ="uploads/";
    $images = glob($dirname."*.jpg");
while($stmt->fetch()){ 
    echo '<div style=" border:1px solid black; text-align:left; padding: 5px; padding-top: 5px; font-size:15px;  background-color:white; color:black; width:260px; height: 620px; margin-left: auto; margin-right: auto; margin: 25px; float: left;"><tr><br>
    <td><img src ="'.$imgURL.'" height="300" width="240" </td><br>
    <h3>'.$item.'</h3><br>
    <td>Size:</td> <td>'.$size.'</td><br>
    <td>Price:</td> <td>'.$price.'</td>kr<br>
    <td>Gender:</td> <td>'.$gender.'</td><br>
    <td>Description:</td> <td>'.$description.'</td><br>
    <br>
    <button class="buy" type="button">Buy Item</button><br>
    
                    
    </tr></div>';
        }
   
}
    
?>
    
    



  </div>



</body>
    
</html>