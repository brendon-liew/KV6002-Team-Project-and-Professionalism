<?php

//fetch.php
require_once("config.php");


if(isset($_POST['search']))
{
	
$search= $_POST["search"];
 if($search==1){
 $query = "SELECT * FROM jacket";
 }elseif($search==2){
 $query = "SELECT * FROM shirt";
 }elseif($search==3){
 $query = "SELECT * FROM shoes";
 }elseif($search==4){
 $query = "SELECT * FROM pants";
 }elseif($search==5){
 $query = "SELECT * FROM accessories";
 }else{
 $query = "SELECT * FROM jacket,shirt,shoes,pants,accessories";	 
 }
 
 
 
 
}else{
	 echo "Error";
 }



$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$total_row = $statement->rowCount();

$output = '';

if($total_row > 0)
{
	$output .= '
	<div class="table-responsive">
	<table class="table table bordered">
	<tr>
		<th>Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Image</th>
		<th>Edit</th>
	<tr>
  ';
	if($search==1){
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["jaName"].'</td>
   <td>'.$row["jaDesc"].'</td>
   <td>'.$row["jaPrice"].'</td>
   <td><img src="http://'.$row["jaImg"].'"></td>
   <td><a href="editProduct.php?jaID='.$row["jaID"].'">Edit</a></td>
   
  </tr>
  
  ';
 }
	}
	elseif($search==2){
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["shrtName"].'</td>
   <td>'.$row["shrtDesc"].'</td>
   <td>'.$row["shrtPrice"].'</td>
   <td>'.$row["shrtImg"].'</td>
   <td><a href="editProduct.php?shrtID='.$row["shrtID"].'">Edit</a></td>
  </tr>
  
  ';
 }
}elseif($search==3){
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["shName"].'</td>
   <td>'.$row["shDesc"].'</td>
   <td>'.$row["shPrice"].'</td>
   <td>'.$row["shImg"].'</td>
    <td><a href="editProduct.php?shID='.$row["shID"].'">Edit</a></td>
  </tr>
  
  ';
}
}elseif($search==4){
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["paName"].'</td>
   <td>'.$row["paDesc"].'</td>
   <td>'.$row["paPrice"].'</td>
   <td>'.$row["paImg"].'</td>
    <td><a href="editProduct.php?paID='.$row["paID"].'">Edit</a></td>
  </tr>
  
  ';
 }
}elseif($search==5){
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row["asName"].'</td>
   <td>'.$row["asDesc"].'</td>
   <td>'.$row["asPrice"].'</td>
   <td>'.$row["asImg"].'</td>
   <td><a href="editProduct.php?asID='.$row["asID"].'">Edit</a></td>
  </tr>
  
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}
}

echo $output;



?>