<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Create a user</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font stylesheet -->	
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <!-- Own stylesheet -->
     <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body id="input">
	<h3 id="headerlogin">FASHIONMEKKA</h3>
    <a href="index.php"><img alt="Back" id="backbutton" src="img/back.png"></a>

   
<?php
  
    
if(!empty(filter_input(INPUT_POST, 'submit'))) {
	
	require_once('dbconnection.php');
	
	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal name parameter');
	$pw = filter_input(INPUT_POST, 'pw') 
		or die('Missing/illegal password parameter');
	//hash and salt the password
	$pw = password_hash($pw, PASSWORD_DEFAULT); 
	
    //echo 'Creating user: '.$un.' => '.$pw;
	
	$sql = 'INSERT INTO Users (username, pwhash) VALUES (?,?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ss', $un, $pw);
	$stmt->execute();
	
	if ($stmt->affected_rows >0){
  
		 echo "<script> window.location.assign('loggin.php'); </script>";
	}
	else {
		echo 'Error adding user ['.$un.'] does this user already exist?';
	}
}
?>
<p id="newuser">Alreday have an account? <a href="loggin.php">create new account</a></p>
	<p>
	<form id="loginform" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		<fieldset>
			<h1 id="h1">Create User</h1><input name="un" placeholder="Username" required="" type="text"><br>
			<input name="pw" placeholder="Password" type="password"><br>
			<input id="submit" name="submit" type="submit" value="Create user">
		</fieldset>
	</form>
	</p>
    


</body>
</html>