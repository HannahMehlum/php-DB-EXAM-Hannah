<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Review</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- Font stylesheet -->	
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
<!-- Own stylesheet -->
     <link href="style.css" rel="stylesheet" type="text/css">
</head>    
<body id="secret">
	<h3 id="headerlogin">FASHIONMEKKA</h3><a href="secret.php"><img alt="Back" id="backbutton" src="img/back.png"></a>
</body>
</html>
    
    

    <?php

    if(!empty(filter_input(INPUT_POST, 'submit'))) {
	
	require_once('dbconnection.php');
	
	$title = filter_input(INPUT_POST, 'title') 
		or die('Missing/illegal title parameter');
    $description = filter_input(INPUT_POST, 'description') 
		or die('Missing/illegal review parameter');
   
    
        
    $sql = 'INSERT INTO Review (title, description) VALUES (?,?)';
        $stmt = $link->prepare($sql);
        $stmt->bind_param('ss', $title, $description);
        $stmt->execute();
      
    }
    ?>

</p>
	<form id="loginform" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
		<fieldset>
			<h1 id="h1">Write a review</h1><input name="title" placeholder="Title" required="" type="text"><br>
			<input name="description" placeholder="Review" type="text"><br>
			<input name="submit" type="submit" value="Post">
		</fieldset>
	</form>
</p>
	<h3 id="itemheader">Reviews</h3>

    
     
    
     <?php
        //Showing the reviews
		
		require_once('dbconnection.php');
		$sql = 'SELECT title, description
        FROM Review';
                
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($title, $description);
		while($stmt->fetch()){ 
        echo '<div style="border:1px solid black; width: 400px;
        height: 200px; text-align:left; padding:5px; font-size:15px; background-color:#262626; opacity: 0.6; color:white; margin-left: auto; margin-right: auto; margin: 10px; float: left;"><tr><br>
                 
					<td></td> <td>'.$title.'</td><br>
                    <td>Review:</td> <td>'.$description.'</td><br>
                    <br>
             </tr></div>';
        }
    
 ?> 
    
      
    
</body>
</html>