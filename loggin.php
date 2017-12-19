<?php session_start(); ?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font stylesheet -->	
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <!-- Own stylesheet -->
     <link href="style.css" rel="stylesheet" type="text/css">
<body id="input">
	<h3 id="headerlogin">FASHIONMEKKA</h3><a href="index.php"><img alt="Back" id="backbutton" src="img/back.png"></a>
</body>
</html>
    
    
<?php
//checks if the input is NOT empty and checks if the username and password matches the info in database. 
//If it does; it logs in. If not it returns an error message to the user.
if(!empty(filter_input(INPUT_POST, 'submit'))) {
	require_once('dbconnection.php');
	
	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal name parameter');
	$pw = filter_input(INPUT_POST, 'pw') 
		or die('Missing/illegal password parameter');
	$sql = 'SELECT idUsers, pwhash FROM Users WHERE username=?';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$stmt->bind_result($uid, $pwhash);
	while ($stmt->fetch()) {} // fill result variables
	
	if (password_verify($pw, $pwhash)){
        echo "<script> window.location.assign('customersite.php'); </script>";
		$_SESSION['uid'] = $uid;
		$_SESSION['un'] = $un;
	}
	else {
		echo 'illegal username/password combination';
	}
}
?>
<p id="newuser">New user? <a href="createuser.php">create new account</a></p>
	<p>
	<form id="loginform" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		<fieldset>
			<h1 id="h1">Login</h1><input name="un" placeholder="Username" required="" type="text"><br>
			<input name="pw" placeholder="Password" type="password"><br>
			<input id="submit" name="submit" type="submit" value="Login">
		</fieldset>
	</form>
	</p>
    
 


</body>
</html>