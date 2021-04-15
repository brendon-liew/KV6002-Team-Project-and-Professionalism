<?php
//Including Database configuration file.
require_once("config.php");




$search1 = isset($_POST['query1'])? $_POST['query1'] : null;

if(isset($_POST["query"]))
{
	
	$search= $_POST["query"];
		if($search1==1){
			$query ="Select * from jacket where jaName LIKE '%".$search."%'";
		}elseif($search1==2){
		$query = "Select * from shirt where shrtName LIKE '%".$search."%'";
		}elseif($search1==3){
		$query = "SELECT * FROM shoes where shName LIKE '%".$search."%'";
		}elseif($search1==4){
		$query = "SELECT * FROM pants where paName LIKE '%".$search."%'";
		}else{
		$query = "SELECT * FROM jacket,shirt,shoes,pants";	 
		}
	
}else{
	$query ="Select * from jacket";
	}


$stmt = $conn->prepare($query);

$stmt->execute();



$result = $stmt->fetchAll();

$total_row = $stmt->rowCount();
 
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
		if($search1==1){
	 foreach($result as $row)
	 {
	  $output .= '
	  <tr>
	   <td>'.$row["jaName"].'</td>
	   <td>'.$row["jaDesc"].'</td>
	   <td>'.$row["jaPrice"].'</td>
	   <td><img style="width:350px" src="http://'.$row["jaImg"].'"></td>
	   <td><a href="editProduct.php?jaID='.$row["jaID"].'">Edit</a></td>
	</tr>
	  
	  ';
	 }
		}
		
					if($search1==2){
				 foreach($result as $row)
				 {
				  $output .= '
				  <tr>
				   <td>'.$row["shrtName"].'</td>
				   <td>'.$row["shrtDesc"].'</td>
				   <td>'.$row["shrtPrice"].'</td>
				   <td><img style="width:350px" src="http://'.$row["shrtImg"].'"></td>
				   <td><a href="editProduct.php?shrtID='.$row["shrtID"].'">Edit</a></td>
				  </tr>
				  
				  ';
				 }
				}
					if($search1==3){
						foreach($result as $row)
						{
						$output .= '
						<tr>
					   <td>'.$row["shName"].'</td>
					   <td>'.$row["shDesc"].'</td>
					   <td>'.$row["shPrice"].'</td>
					   <td><img style="width:350px" src="http://'.$row["shImg"].'"></td>
						<td><a href="editProduct.php?shID='.$row["shID"].'">Edit</a></td>
					  </tr>
					  ';
						}
					}
							if($search1==4){
							 foreach($result as $row)
							 {
							  $output .= '
							  <tr>
							   <td>'.$row["paName"].'</td>
							   <td>'.$row["paDesc"].'</td>
							   <td>'.$row["paPrice"].'</td>
							   <td><img style="width:350px "src="http://'.$row["paImg"].'"></td>
								<td><a href="editProduct.php?paID='.$row["paID"].'">Edit</a></td>
							  </tr>
  
							  ';
							 }
							}
										if($search1==5){
										 foreach($result as $row)
										 {
										  $output .= '
										  <tr>
										   <td>'.$row["asName"].'</td>
										   <td>'.$row["asDesc"].'</td>
										   <td>'.$row["asPrice"].'</td>
										   <td><img src="http://'.$row["asImg"].'"></td>
										   <td><a href="editProduct.php?asID='.$row["asID"].'">Edit</a></td>
										  </tr>
  
			  
										  ';
										 }
										}
}else
{
 $output .= '
 <tr>
  <td colspan="5" align="center">No Data Found</td>
 </tr>
 ';
}


echo $output;
?>
