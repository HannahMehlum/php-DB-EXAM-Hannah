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
    <!-- Own stylesheet -->
	<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    
    
    
    
    
    <?php
    //if successful login it rederects to secret.php
	
	if (!empty($_SESSION['uid'])){
        
	 echo "<script> window.location.assign('secret.php'); </script>";
		
	}
	else {
		echo 'You are not logget in';
	}
 
?>

    
</body>
</html>