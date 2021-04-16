<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Product</title>
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
    
    

<body>


<?php
	try{
	require_once("config.php");
	
	$jaID = isset($_GET["jaID"]) ? $_GET["jaID"] : null;
	$shrtID = isset($_GET["shrtID"]) ? $_GET["shrtID"] : null;
	$shID = isset($_GET["shID"]) ? $_GET["shID"] : null;
	$paID = isset($_GET["paID"]) ? $_GET["paID"] : null;
	$asID = isset($_GET["asID"]) ? $_GET["asID"] : null;
	
	$stmt1 = $conn->prepare("Select genID,gender from gender");
	$stmt1->execute();
	
	$stmt2 = $conn->prepare("Select catID,catName from cat");
	$stmt2->execute();
	
	
	
	if($jaID!=null){
	$stmt3 = $conn->prepare("Select jaID,jaName,jaDesc,jaPrice,jaImg,jacket.genID,gender.genID,gender.gender from jacket
							INNER JOIN gender ON  gender.genID = jacket.genID where jaID = $jaID");
	$stmt3->execute();
	$result3 = $stmt3->fetchObject();
	
	
	
	$stmt6 = $conn->prepare("Select catID,catName from cat where catID = 1");
	$stmt6->execute();
	$result4 = $stmt6->fetchObject();
	
	
	}elseif($shrtID!=null){
	$stmt5 = $conn->prepare("Select shrtID,shrtName,shrtDesc,shrtPrice,shrtImg,shirt.genID,gender.genID,gender.gender from shirt
							INNER JOIN gender ON  gender.genID = shirt.genID where shrtID = $shrtID");
	$stmt5->execute();
	$result5 = $stmt5->fetchObject();
	
	
	
	$stmt6 = $conn->prepare("Select * from cat where catID = 2");
	$stmt6->execute();
	$result4 = $stmt6->fetchObject();	
		
		
		
	}elseif($shID!=null){
	$stmt7 = $conn->prepare("Select shID,shName,shDesc,shPrice,shImg,shoes.genID,gender.genID,gender.gender from shoes
							INNER JOIN gender ON  gender.genID = shoes.genID where shID = $shID");
	$stmt7->execute();
	$result7 = $stmt7->fetchObject();
	
	$stmt6 = $conn->prepare("Select * from cat where catID = 3");
	$stmt6->execute();
	$result4 = $stmt6->fetchObject();
	
	}elseif($paID!=null){
	
	$stmt8 = $conn->prepare("Select paID,paName,paDesc,paPrice,paImg,pants.genID,gender.genID,gender.gender from pants
							INNER JOIN gender ON  gender.genID = pants.genID where paID = $paID");
	$stmt8->execute();
	$result8 = $stmt8->fetchObject();
	
	$stmt6 = $conn->prepare("Select * from cat where catID = 4");
	$stmt6->execute();
	$result4 = $stmt6->fetchObject();
	
	}elseif($asID!=null){
		
	$stmt9 = $conn->prepare("Select asID,asName,asDesc,asPrice,asImg,accessories.genID,gender.genID,gender.gender from accessories
							INNER JOIN gender ON  gender.genID = accessories.genID where asID = $asID");
	$stmt9->execute();
	$result9 = $stmt9->fetchObject();
	
	$stmt6 = $conn->prepare("Select * from cat where catID = 5");
	$stmt6->execute();
	$result4 = $stmt6->fetchObject();
	}
	
	
	echo '<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">';
    echo  '<div class="container"><a class="navbar-brand" href="#">E-Goth</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link active" href="productForm.php">Add product</a></li>
                    <li class="nav-item"><a class="nav-link" href="searchProduct.php">Search product</a></li>
                    
                </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#">Log out</a></span>
            </div>
        </div>
    </nav>';
    
	echo '<section class="contact-clean">';
	echo "<form class='bootstrap-form-with-validation' action='updateProduct.php' method='post' enctype='multipart/form-data'>";
	
	if($jaID!=null){
	echo '<h2 class="text-center">Edit Product</h2>';
	echo "<p hidden>Product ID:<input type='text' id='IDname' name='IDname' value='{$result3->jaID}' hidden></p>";
	echo "<div class='form-group'><label for='text-input'>Product name:</label>
	<input class='form-control' type='text' id='fname' name='fname' value='{$result3->jaName}'></div>";
	echo "<div class='form-group'><label for='file-input'>Image:</label>";
	echo "<input class='form-control-file' type='file' name='uploadImg'>";
	echo "<img id='myImg' style='width:350px ' src='http://{$result3->jaImg}' ></div>";
	echo "<div class='form-group'><label for='password-input'>Gender:</label>
	<select class='form-control' name='genders'>";
	
	while ($record1 = $stmt1->fetchObject()) {
	if ($result3->genID == $record1->genID) {
	echo "<option value='{$record1->genID}' selected>{$record1->gender}</option>";
	}
	else { 
   echo "<option value='{$record1->genID}'>{$record1->gender}</option>";
	}	
		}
		
		

	echo "</select></div>";
	
	echo "<div class='form-group'><label for='email-input'>Category:</label>
		<select name='cat'>";
	
		while ($record2 = $stmt2->fetchObject()) {
			if ($result4->catID == $record2->catID) {
	echo "<option value='{$record2->catID}'selected>{$record2->catName}</option>";
	}
	else {
		echo "<option value='{$record2->catID}'>{$record2->catName}</option>";
	}
		}
	echo "</select></div>";
	
	
	echo "<div class='form-group'><label for='search-input'>Price</label>
	<input type='number' name='pri' id='pric' class='form-control' placeholder='0.00' step='0.01' value='{$result3->jaPrice}'></p>";
	echo '<div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>';
	echo "<div class='form-group'><label>Information of product</label><textarea class='form-control' name='desc'>{$result3->jaDesc}</textarea></div>";
	
	}
	elseif($shrtID!=null){
		echo '<h2 class="text-center">Edit Product</h2>';
	echo "<p hidden>Product ID:<input type='text' id='IDname' name='IDname' value='{$result5->shrtID}' hidden></p>";
	echo "<div class='form-group'><label for='text-input'>Product name:</label>
	<input class='form-control' type='text' id='fname' name='fname' value='{$result5->shrtName}'></div>";
	echo "<div class='form-group'><label for='file-input'>Image:</label>";
	echo "<input class='form-control-file' type='file' name='uploadImg'>";
	echo "<img id='myImg' style='width:350px ' src='http://{$result5->shrtImg}' ></div>";
	echo "<div class='form-group'><label for='password-input'>Gender:</label>
	<select class='form-control' name='genders'>";
	
	while ($record1 = $stmt1->fetchObject()) {
	if ($result5->genID == $record1->genID) {
	echo "<option value='{$record1->genID}' selected>{$record1->gender}</option>";
	}
	else { 
   echo "<option value='{$record1->genID}'>{$record1->gender}</option>";
	}	
		}
		
		

	echo "</select></div>";
	
	echo "<div class='form-group'><label for='email-input'>Category:</label>
		<select name='cat'>";
	
		while ($record2 = $stmt2->fetchObject()) {
			if ($result4->catID == $record2->catID) {
	echo "<option value='{$record2->catID}'selected>{$record2->catName}</option>";
	}
	else {
		echo "<option value='{$record2->catID}'>{$record2->catName}</option>";
	}
		}
	echo "</select></div>";
	
	
	echo "<div class='form-group'><label for='search-input'>Price</label>
	<input type='number' name='pri' id='pric' class='form-control' placeholder='0.00' step='0.01' value='{$result5->shrtPrice}'></p>";
	echo '<div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>';
	echo "<div class='form-group'><label>Information of product</label><textarea class='form-control' name='desc'>{$result5->shrtDesc}</textarea></div>";
	
	}
	elseif($shID!=null){
		echo '<h2 class="text-center">Edit Product</h2>';
	echo "<div class='form-group' hidden>Product ID:<input type='text' id='IDname' name='IDname' value='{$result7->shID}' hidden></div>";
	echo "<div class='form-group'><label for='text-input'>Product name:</label>
	<input class='form-control' type='text' id='fname' name='fname' value='{$result7->shName}'></div>";
	echo "<div class='form-group'><label for='file-input'>Image:</label>";
	echo "<input class='form-control-file' type='file' name='uploadImg'>";
	echo "<img id='myImg' style='width:350px ' src='http://{$result7->shImg}' ></div>";
	echo "<div class='form-group'><label for='password-input'>Gender:</label>
	<select class='form-control' name='genders'>";
	
	while ($record1 = $stmt1->fetchObject()) {
	if ($result7->genID == $record1->genID) {
	echo "<option value='{$record1->genID}' selected>{$record1->gender}</option>";
	}
	else { 
   echo "<option value='{$record1->genID}'>{$record1->gender}</option>";
	}	
		}
		
		

	echo "</select></div>";
	
	echo "<div class='form-group'><label for='email-input'>Category:</label>
		<select name='cat'>";
	while ($record2 = $stmt2->fetchObject()) {
			if ($result4->catID == $record2->catID) {
		echo "<option value='{$record2->catID}'selected>{$record2->catName}</option>";
		}
			else {
			echo "<option value='{$record2->catID}'>{$record2->catName}</option>";
			}
	}
	
	echo "</select></div>";
	
	
	echo "<div class='form-group'><label for='search-input'>Price</label>
	<input type='number' name='pri' id='pric' class='form-control' placeholder='0.00' step='0.01' value='{$result7->shPrice}'></p>";
	echo '<div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>';
	echo "<div class='form-group'><label>Information of product</label><textarea class='form-control' name='desc'>{$result7->shDesc}</textarea></div>";
	
	}
	elseif($paID!=null){
		echo '<h2 class="text-center">Edit Product</h2>';
	echo "<div class='form-group' hidden>Product ID:<input type='text' id='IDname' name='IDname' value='{$result8->paID}' hidden></div>";
	echo "<div class='form-group'><label for='text-input'>Product name:</label>
	<input class='form-control' type='text' id='fname' name='fname' value='{$result8->paName}'></div>";
	echo "<div class='form-group'><label for='file-input'>Image:</label>";
	echo "<input class='form-control-file' type='file' name='uploadImg'>";
	echo "<img id='myImg' style='width:350px ' src='http://{$result8->paImg}' ></div>";
	echo "<div class='form-group'><label for='password-input'>Gender:</label>
	<select class='form-control' name='genders'>";
	
	while ($record1 = $stmt1->fetchObject()) {
	if ($result8->genID == $record1->genID) {
	echo "<option value='{$record1->genID}' selected>{$record1->gender}</option>";
	}
	else { 
   echo "<option value='{$record1->genID}'>{$record1->gender}</option>";
	}	
		}
		
		

	echo "</select></div>";
	
	echo "<div class='form-group'><label for='email-input'>Category:</label>
		<select name='cat'>";
	
		while ($record2 = $stmt2->fetchObject()) {
			if ($result4->catID == $record2->catID) {
	echo "<option value='{$record2->catID}'selected>{$record2->catName}</option>";
	}
	else {
		echo "<option value='{$record2->catID}'>{$record2->catName}</option>";
	}
		}
	echo "</select></div>";
	
	
	echo "<div class='form-group'><label for='search-input'>Price</label>
	<input type='number' name='pri' id='pric' class='form-control' placeholder='0.00' step='0.01' value='{$result8->paPrice}'></p>";
	echo '<div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>';
	echo "<div class='form-group'><label>Information of product</label><textarea class='form-control' name='desc'>{$result8->paDesc}</textarea></div>";
	
	}elseif($asID!=null){
		echo '<h2 class="text-center">Edit Product</h2>';
	echo "<div class='form-group' hidden>Product ID:<input type='text' id='IDname' name='IDname' value='{$result9->asID}' hidden></div>";
	echo "<div class='form-group'><label for='text-input'>Product name:</label>
	<input class='form-control' type='text' id='fname' name='fname' value='{$result9->asName}'></div>";
	echo "<div class='form-group'><label for='file-input'>Image:</label>";
	echo "<input class='form-control-file' type='file' name='uploadImg'>";
	echo "<img id='myImg' style='width:350px ' src='http://{$result9->asImg}' ></div>";
	echo "<div class='form-group'><label for='password-input'>Gender:</label>
	<select class='form-control' name='genders'>";
	
	while ($record1 = $stmt1->fetchObject()) {
	if ($result9->genID == $record1->genID) {
	echo "<option value='{$record1->genID}' selected>{$record1->gender}</option>";
	}
	else { 
   echo "<option value='{$record1->genID}'>{$record1->gender}</option>";
	}	
		}
		
		

	echo "</select></div>";
	
	echo "<div class='form-group'><label for='email-input'>Category:</label>
		<select name='cat'>";
	
		while ($record2 = $stmt2->fetchObject()) {
			if ($result4->catID == $record2->catID) {
	echo "<option value='{$record2->catID}'selected>{$record2->catName}</option>";
	}
	else {
		echo "<option value='{$record2->catID}'>{$record2->catName}</option>";
	}
		}
	echo "</select></div>";
	
	
	echo "<div class='form-group'><label for='search-input'>Price</label>
	<input type='number' name='pri' id='pric' class='form-control' placeholder='0.00' step='0.01' value='{$result9->asPrice}'></p>";
	echo '<div class="input-group">
                    <div class="input-group-prepend"></div>
                </div>
            </div>';
	echo "<div class='form-group'><label>Information of product</label><textarea class='form-control' name='desc'>{$result9->asDesc}</textarea></div>";
	}
		
		
	

	
	
	echo "<div class='form-group'><input class='btn btn-primary' type='submit' value='Submit' name='submit'></div>";
	echo "</form>";
	echo "</section>";
	
	}catch(PDOException $e) {
	echo  "<br>" . $e->getMessage();
	}
?>




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
<script type="text/javascript" src="scripts.js"></script>
