<?php
//index.php

session_start();

require_once("config.php");

$query = "SELECT * FROM cat";

$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Search Product</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/article.css">
    <link rel="stylesheet" href="assets/css/checkout.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>


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
		 location.reload();
		}
		});
		 });
		
		
	});
	</script>
</head>
<body style="font-family: Oswald, sans-serif;background: url(&quot;assets/img/lines%20backround%202%20dark.jpg&quot;);">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button" id="navclass" style="color: var(--gray-dark);background: rgba(255,255,255,0.62);">
        <div class="container"><a class="navbar-brand" href="#">Company Name</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item"><a class="nav-link" href="addProduct.php">Add Product</a></li>
                    <li class="nav-item"><a class="nav-link" href="searchProduct.php">Search Product</a></li>
                </ul>
            </div>
        </div>
		<div class="dropdown">
		<a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#" style="color: #434a52;">Account</a>
                <div class="dropdown-menu">
				<?php
                if (isset($_SESSION['logged-in'])) {
                    echo"<a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"signOut.php\" style=\"color: rgb(0,0,0);background: #e87fc9;\">Sign out</a></div>";

                } else{
                    (empty($_SESSION['logged-in']));
                    echo "<a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"signForm.php\" style=\"color: rgb(0,0,0);background: #e5c6db;\">Sign up</a>
                    <a class=\"dropdown-item\" data-bss-hover-animate=\"pulse\" href=\"login.php\" style=\"color: rgb(0,0,0);background: #e87fc9;\">Log in</a></div>";
                }
                ?>
				
            </div>
    </nav>
	<label for="search-field">Category:</label>
	<select name="multi_search" id="multi_search" >
	
	<?php
   foreach($result as $row)
   {
    echo '<option value="'.$row["catID"].'">'.$row["catName"].'</option>'; 
   }
   ?>
	
	</select>
	
	
	
	
	 <input type="text" name="search_text" id="search_text" placeholder="Search"/></p>
	<br>
	<div id="result">
	</div>

	

</body>

</html>


