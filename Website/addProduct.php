<?php

require_once("config.php");


if(isset($_POST['submit'])){
	
 $test = $_POST['fname'];
	$filename = $_FILES["uploadImg"]["name"]; 
    $tempname = $_FILES["uploadImg"]["tmp_name"];     
    $folder = "Img/".$filename; 
        
      
	//inserting image details (ie image name) in the database
	 $sql = "INSERT INTO product (pname,pimg) VALUES ('$test','$filename')";
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
