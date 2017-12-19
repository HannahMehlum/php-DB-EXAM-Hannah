<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Sell your clothes</title>
    
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
     <link rel="stylesheet" type="text/css" href="style.css">
    
     <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
</head>

<body id="input">
    
<h3 id="headerlogin">FASHIONMEKKA</h3>
    
<a href="secret.php"><img id ="backbutton" src="img/back.png"
alt="Back"/></a>
    
     
    
<?php
    if(!empty(filter_input(INPUT_POST, 'submit'))) {
	
	require_once('dbconnection.php');
	
	$item = filter_input(INPUT_POST, 'item') 
		or die('Missing/illegal item parameter');
    $size = filter_input(INPUT_POST, 'size') 
		or die('Missing/illegal size parameter');
    $price = filter_input(INPUT_POST, 'price') 
		or die('Missing/illegal price parameter');
    $gender = filter_input(INPUT_POST, 'gender') 
		or die('Missing/illegal item parameter');
    $description = filter_input(INPUT_POST, 'description') 
		or die('Missing/illegal description parameter');
        
   
    //Upload image
    
        
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
            }
        }
        
        if($uploadOk){
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
    //Adding inputdata to the database
        
    $sql = 'INSERT INTO Clothes (item, size, price, gender, description, imgURL) VALUES (?,?,?,?,?,?)';
        $stmt = $link->prepare($sql);
        $stmt->bind_param('siisss', $item, $size, $price, $gender, $description, $target_file);
        $stmt->execute();
        if($stmt->affected_rows > 0){
            echo 'Filedata added to the database';
        }
        else {
            echo 'Could not add the filedata to database';
        }
    }
    ?>
    
 

<p>
<form id="loginform" action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
	<fieldset>
    	<h1 id="h1">Add clothing</h1>
    	<input name="item" type="text" placeholder="Clothing item"required /> <br>
    	<input name="size" type="text" placeholder="Size"  required/><br>
        <input name="price" type="text" placeholder="Price"  required/><br>
        <p>Please specify Female or Male</p>
        <input name="gender" type="text" placeholder="Gender"  required/><br>
        <input name="description" type="text" placeholder="Description"  required/><br>
         <input type="file" name="fileToUpload" id="fileToUpload"><br>
        <input type="submit" value="Upload clothing" name="submit">
	</fieldset>
</form>
</p>

 </body>

</html>

