<?php
//index.php
require_once("config.php");

$query = "SELECT * FROM cat";

$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>


<!DOCTYPE html>
<html>
<head>
<title>Search Product</title>

<script src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
		
		//load_data();
		
		
		 
	
			
		
		function load_data(query,que)
		{
			
			
			$.ajax({
			url:"ajax.php",
			method:"POST",
			data:{query:query,query1:que},
			success:function(data)
			{
				$('#result').html(data);
			}
			});
		 
		}
		 $('#multi_search').change(function(){
			 var z = $(this).val();
			 $.ajax(
			 {
			url:"fetch.php",
			method:"POST",
			data:{search:z},
			success:function(data)
				{
				$('#result').html(data);
				}
			}
			);
		$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search,z);
		}else{
		load_data();
		}
		});
		 });
		
		
	});
	</script>
</head>
<body>

	<label for='fname'>Category:</label>
	<select name="multi_search" id="multi_search" >
	
	<?php
   foreach($result as $row)
   {
    echo '<option value="'.$row["catID"].'">'.$row["catName"].'</option>'; 
   }
   ?>
	
	</select>
	
	
	
	
	 <input type="text" name="search_text" id="search_text" placeholder="Search" /></p>
	<br>
	<div id="result"></div>

	

</body>

</html>


