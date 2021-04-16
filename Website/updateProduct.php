<?php

require_once("config.php");

$cate = isset($_POST['cat'])? $_POST['cat'] : null;
if(isset($_POST['submit'])){
	try {
	
	//inserting image details (ie image name) in the database
	 //Prepare stament
	 if($cate==1){
	 $stmt = $conn->prepare("UPDATE jacket SET jaName=:fname,
												jaImg=:uploadImg,
												genID=:genders,
												jaPrice=:pri,
												jaDesc=:desc
												WHERE
												jaID=:IDname
												");
	 
	 }elseif($cate==2){
	  $stmt = $conn->prepare("UPDATE shirt SET shrtName=:fname,
												shrtImg=:uploadImg,
												genID=:genders,
												shrtPrice=:pri,
												shrtDesc=:desc
												WHERE
												shrtID=:IDname
												");
												
	 }elseif($cate==3){
		 $stmt = $conn->prepare("UPDATE shoes  SET shName=:fname,
												shImg=:uploadImg,
												genID=:genders,
												shPrice=:pri,
												shDesc=:desc
												WHERE
												shID=:IDname
												");
												
	 }elseif($cate==4){
		 $stmt = $conn->prepare("UPDATE pants  SET paName=:fname,
												paImg=:uploadImg,
												genID=:genders,
												paPrice=:pri,
												paDesc=:desc
												WHERE
												paID=:IDname
												");
												
	 }elseif($cate==5){
		 $stmt = $conn->prepare("UPDATE accessories SET asName=:fname,
												asImg=:uploadImg,
												genID=:genders,
												asPrice=:pri,
												asDesc=:desc
												WHERE
												asID=:IDname
												");
	 }
	 
	 //Bind value 
	 $stmt->bindParam(':IDname', $IDname);
	 $stmt->bindParam(':fname', $fname);
	 $stmt->bindParam(':uploadImg', $filename);
	 $stmt->bindParam(':genders', $gender);
	 $stmt->bindParam(':desc', $desc);
	 $stmt->bindParam(':pri', $pric);
	 
	//Get value from the form 
	$IDname = $_POST['IDname'];
	$fname = $_POST['fname'];
	$filename = $_FILES['uploadImg']['name']; 
    $tempname = $_FILES['uploadImg']['tmp_name'];     
	//Create folder in current directory
	//Can change the folder name
    $folder = getcwd()."/Img/"; 
	
    $gender = $_POST['genders'];   	
	$desc = $_POST['desc'];  	
	$pric = $_POST['pri'];  
	
	
	 
	
	
	
	
	
	
	//Check see whether this directory exist current folder 
	if(!is_dir($folder)){
		mkdir($folder,0755);
	}
	//Save image to the folder
	  $folder1 = getcwd()."/Img/".$filename; 
	  
	 if(move_uploaded_file($tempname, $folder1)){
		echo "<script>alert('Update successfully');</script>"; 
	 }else{
		 echo "Fail to upload";
	 }
	 $stmt->execute();
	 

		} catch(PDOException $e) {
	echo  "<br>" . $e->getMessage();
	}
}
?>