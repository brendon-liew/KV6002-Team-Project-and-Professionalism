<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Product</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Check-Out-Page-v100.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean-1.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Sidebar-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/script.js"></script>
    
    
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
    <section class="contact-clean">
        <form class="bootstrap-form-with-validation" action="addProductProcess.php" method="post" method="post"enctype="multipart/form-data">
            <h2 class="text-center">Add Product</h2>
            <div class="form-group"><label for="text-input">Product Name</label><input  class="form-control" type="text" id="fname" name="fname"></div>
			<div class="form-group"><label for="file-input">File Input</label>
			<input class="form-control-file" type="file" name="uploadImg" onclick="hide()">
			<img id="myImg" src="#" style="visibility:hidden"></div>
            <div class="form-group"><label for="password-input">Gender</label>
			<select class="form-control" name="genders">
			<option value="1">Female</option>
			<option value="2">Male</option>
			<option value="3">Unisex</option>
			</select>
		    </div>
            <div class="form-group"><label for="email-input">Category</label>
			<select class="form-control" name="cat">
			<option value=""></option>
			<option value="1">Jacket</option>
            <option value="2">Shirt</option>
            <option value="3">Shoes</option>
			<option value="4">Pants</option>
			<option value="5">Accessories</option>
			</select>
			</div>
            <div class="form-group"><label for="search-input">Price</label><input id="pric" class="form-control" type="number" name="pri" placeholder="0.00" step="0.01">
                <div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>
            <div class="form-group"><label>Information of product</label><textarea class="form-control" name="info"></textarea></div>
            <div class="form-group"><input class="btn btn-primary" type="submit" value="submit" name="submit"></div>
        </form>
    </section>
    
</body>
</html>
<script>
window.addEventListener('load', function() {
  document.querySelector('input[type="file"]').addEventListener('change', function() {
      if (this.files && this.files[0]) {
          var img = document.querySelector('img');
          img.onload = () => {
              URL.revokeObjectURL(img.src);  // no longer needed, free memory
          }

          img.src = URL.createObjectURL(this.files[0]); // set src to blob url
      }
  });
});
 
//Show image
function hide(){
	document.getElementById("myImg").style.visibility="visible";
} 


//Setting for price to direct change from int to decimal value
var numberEle= document.getElementById("pric");
numberEle.addEventListener('change',alterNumber);

function alterNumber(event){
var el = event.target;
var elValue = el.value;
el.value = parseFloat(elValue).toFixed(2);

}
</script>
