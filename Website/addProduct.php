<?php
session_start();
require_once("config.php");

$cate = isset($_POST['cat'])? $_POST['cat'] : null;
if(isset($_POST['submit'])){
	try {
	
	//inserting image details (ie image name) in the database
	
	
	 //Prepare stament
	 if($cate==1){
	 $stmt = $conn->prepare("INSERT INTO jacket (jaName,jaImg,jaDesc,jaPrice,genID) VALUES(:fname,:uploadImg,:info,:pri,:genders)");
	 }elseif($cate==2){
	 $stmt = $conn->prepare("INSERT INTO shirt (shrtName,shrtImg,shrtDesc,shrtPrice,genID) VALUES(:fname,:uploadImg,:info,:pri,:genders)");
	 }elseif($cate==3){
	 $stmt = $conn->prepare("INSERT INTO shoes (shName,shImg,shDesc,shPrice,genID) VALUES(:fname,:uploadImg,:info,:pri,:genders)");
	 }elseif($cate==4){
	 $stmt = $conn->prepare("INSERT INTO pants (paName,paImg,paDesc,paPrice,genID) VALUES(:fname,:uploadImg,:info,:pri,:genders)");
	 }elseif($cate==5){
	 $stmt = $conn->prepare("INSERT INTO accessories (asName,asImg,asDesc,asPrice,genID) VALUES(:fname,:uploadImg,:info,:pri,:genders)");
	 }
	 //Bind value 
	 $stmt->bindParam(':fname', $fname);
	 $stmt->bindParam(':uploadImg', $filename);
	 $stmt->bindParam(':genders', $gender);
	 //$stmt->bindParam(':cat', $cate);
	 $stmt->bindParam(':pri', $pric);
	 $stmt->bindParam(':info', $des);
	
	
	//Get value from the form 
	$fname = $_POST['fname'];
	$filename = $_FILES['uploadImg']['name']; 
    $tempname = $_FILES['uploadImg']['tmp_name'];     
	//Create folder in current directory
	//Can change the folder name
    $folder = getcwd()."/Img/"; 
	
    $gender = $_POST['genders'];  
	//$cate = $_POST['cat'];  	
	 	
	$pric = $_POST['pri'];  
	$des = $_POST['info']; 
	
	 //$stmt1 = $conn->prepare("Select * from product where pname='" . $fname . "'");
	// $stmt1->execute();
	// $result = $stmt1->fetchAll();
	
	
	
	
	
	
	/Check see whether this directory exist current folder 
	//if(!is_dir($folder)){
	//	mkdir($folder,0755);
	//}
	//Save image to the folder
	 if($cate==1){
	  $folder1 = getcwd()."/images/jacket/".$filename; 
	 }elseif($cate==2){
		$folder1 = getcwd()."/images/shirt/".$filename;  
	 }elseif($cate==3){
		 $folder1 = getcwd()."/images/shoes/".$filename; 
		 }elseif($cate==4){
		 $folder1 = getcwd()."/images/pants/".$filename; 
		 }elseif($cate==5){
			 $folder1 = getcwd()."/images/Accessories/".$filename; 
		 }
	 if(move_uploaded_file($tempname, $folder1)){
		echo "<script>alert('Update successfully');</script>";
	 }else{
		 echo "Fail to upload";
	 }
	 
	 $stmt->execute();
	 //Check whether the value is exist in database
	 //if(count($result)==0){
			//echo "Insert succesfully";
			
			//Execute the value 
			//$stmt->execute();
	//}else{
			//echo "<br>"."Value exist";
	//}

		} catch(PDOException $e) {
	echo  "<br>" . $e->getMessage();
	}
}
?>
