<?php

require_once("config.php");


if(isset($_POST['submit'])){
	try {
	
	//inserting image details (ie image name) in the database
	 //Prepare stament
	 $stmt = $conn->prepare("INSERT INTO product (pname,pimg,gender,category,quantity,price) VALUES(:fname,:uploadImg,:genders,:cat,:qua,:pri)");
	 
	 //Bind value 
	 $stmt->bindParam(':fname', $fname);
	 $stmt->bindParam(':uploadImg', $filename);
	 $stmt->bindParam(':genders', $gender);
	 $stmt->bindParam(':cat', $cate);
	 $stmt->bindParam(':qua', $qual);
	 $stmt->bindParam(':pri', $pric);
	 
	//Get value from the form 
	$fname = $_POST['fname'];
	$filename = $_FILES['uploadImg']['name']; 
    $tempname = $_FILES['uploadImg']['tmp_name'];     
	//Create folder in current directory
	//Can change the folder name
    $folder = getcwd()."/Img/"; 
	
    $gender = $_POST['genders'];  
	$cate = $_POST['cat'];  	
	$qual = $_POST['qua'];  	
	$pric = $_POST['pri'];  
	
	
	 $stmt1 = $conn->prepare("Select * from product where pname='" . $fname . "'");
	 $stmt1->execute();
	 $result = $stmt1->fetchAll();
	
	
	
	
	
	
	//Check see whether this directory exist current folder 
	if(!is_dir($folder)){
		mkdir($folder,0755);
	}
	//Save image to the folder
	  $folder1 = getcwd()."/Img/".$filename; 
	  
	 if(move_uploaded_file($tempname, $folder1)){
		echo "Image uploaded successfully"; 
	 }else{
		 echo "Fail to upload";
	 }
	 
	 //Check whether the value is exist in database
	 if(count($result)==0){
			echo "Insert succesfully";
			
			//Execute the value 
			$stmt->execute();
	}else{
			echo "<br>"."Value exist";
	}

		} catch(PDOException $e) {
	echo  "<br>" . $e->getMessage();
	}
}
?>
