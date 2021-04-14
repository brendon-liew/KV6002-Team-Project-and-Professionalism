<!DOCTYPE html>
<html>




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
	
	
	
	if($jaID!=null){
	$stmt3 = $conn->prepare("Select jaID,jaName,jaDesc,jaPrice,jaImg,jacket.genID,gender.genID,gender.gender from jacket
							INNER JOIN gender ON  gender.genID = jacket.genID where jaID = $jaID");
	$stmt3->execute();
	$result3 = $stmt3->fetchObject();
	
	
	
	
	$stmt1 = $conn->prepare("Select * from cat");
	$stmt1->execute();
	$result1 = $stmt1->fetchAll();
	
	$stmt6 = $conn->prepare("Select * from cat where catID = 1");
	$stmt6->execute();
	
	
	
	}elseif($shrtID!=null){
		
	}elseif($shID!=null){
		
	}elseif($paID!=null){
		
	}elseif($asID!=null){
		
	}
	
	$sql1 = 'SHOW COLUMNS FROM cat WHERE field="catName"';
	$row1 = $conn->query($sql1)->fetch(PDO::FETCH_ASSOC);
	
	
	
	echo "<form action='updateProduct.php' method='post' enctype='multipart/form-data'>";
	if($jaID!=null){
	echo "<p>Product ID:<input type='text' id='IDname' name='IDname' value='{$result3->jaID}'></p>";
	echo "<p>Product name:<input type='text' id='fname' name='fname' value='{$result3->jaName}'></p>";
	echo "<p><label for='img'>Image:</label>";
	echo "<img id='myImg' src='http://{$result3->jaImg}' ></p>";
	echo "<p>Gender:<select name='genders'>";
	
	while ($record1 = $stmt1->fetchObject()) {
	if ($result3->genID == $record1->genID) {
	echo "<option value='{$record1->genID}' selected>{$record1->gender}</option>";
	}
	else { 
   echo "<option value='{$record1->genID}'>{$record1->gender}</option>";
	}	
		}
		
		

	echo "</select></p>";
	
	echo "<p>Category:<select name='cat'>";
	
		while ($result6 = $stmt6->fetch()) {
	echo "<option value=$result6[catID]>$result6[catName]</option>";
	}
	echo "</select></p>";
	
	echo "<p>Quantity<input type='text' name='qua'></p>";
	echo "<p>Price<input type='number' name='pri' class='floatNumberField' placeholder='0.00' step='0.01' value='{$result3->jaPrice}'></p>";
	
	
	
	}
	

	
	
	
	
	
	echo "<p><input type='submit' value='Submit' name='submit'></p>";
	echo "</form>";
	
	}catch(PDOException $e) {
	echo  "<br>" . $e->getMessage();
	}
?>





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
var numberEle= document.querySelector('.floatNumberField');
numberEle.addEventListener('change',alterNumber);

function alterNumber(event){
var el = event.target;
var elValue = el.value;
el.value = parseFloat(elValue).toFixed(2);

}
</script>
<script type="text/javascript" src="scripts.js"></script>
</html>
