<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoppn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed: " . $conn->connect_error);

echo "<p> Connected To Database </p>";





 	 

	if(isset($_POST['submit'])){


		$productname = filter_input(INPUT_POST, 'product_title');
		$category = filter_input(INPUT_POST, 'product_category');
		$brand = filter_input(INPUT_POST, 'product_brand');
		$price = filter_input(INPUT_POST, 'product_price');
		$description = filter_input(INPUT_POST, 'product_desc');
		$product_img = $_FILES["product_img"]["name"];
		$keywords = filter_input(INPUT_POST, 'product_key');
//FILE UPLOAD PHP CODE
		$tmp_name = $_FILES["product_img"]["tmp_name"];
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["product_img"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//VALIDATING IF IMAGE IS CORRECT
		
	    $check = getimagesize($_FILES["product_img"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }


	    if (file_exists($target_file)) {
	    	echo "Sorry, file already exists.";
	   	    $uploadOk = 0;
		}

		if ($_FILES["product_img"]["size"] > 500000){
			echo "Sorry, your file is too large";

			$uploadOk = 0;
		}

		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif"){

			echo "Invalid File Type";
			$uploadOk = 0;
		}
			
		if ($uploadOk==0){

			echo "File was not uploaded successfully";
		}

		else {

						move_uploaded_file($tmp_name, $target_file);


					    if (move_uploaded_file($product_img, $target_file)) {
					        echo "The file ". basename($product_img). " has been uploaded.";
					    		}
					    else {
					        echo "Sorry, there was an error uploading your file.";
				    		}
	    }
	

	$sql = "INSERT INTO products (product_title, product_cat, product_price, product_brand, product_desc, product_image, product_keywords) 
	VALUES ('$productname', '$category', '$price', '$brand', '$description', '$target_file', '$keywords')";

			if($conn->query($sql) === TRUE){
					
				echo "<p>	Product Added!	</p>";

			   }

			else {
				echo "Error, Product Not Inserted";
		}

	$conn -> close();

	}
		
?>
