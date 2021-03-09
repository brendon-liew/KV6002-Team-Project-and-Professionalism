<?php

require_once("config.php");


if(isset($_POST['submit'])){
	
	$test = $_POST['fname'];
	$filename = $_FILES["uploadImg"]["name"]; 
    $tempname = $_FILES["uploadImg"]["tmp_name"];     
	//Save image to the folder
	//Can change the folder name
    $folder = "Img/".$filename; 
    $test2 = $_POST['genders'];  
	$test3 = $_POST['cat'];  	
	$test4 = $_POST['qua'];  	
	//inserting image details (ie image name) in the database
	 $sql = "INSERT INTO product (pname,pimg,gender,category,quantity) VALUES ('$test','$filename','$test2','$test3','$test4')";
	$conn->exec($sql);	
            if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
		}

// try {
	
// } catch(Exception $e) {
 // echo $sql . "<br>" . $e->getMessage();
//}
}
?>
