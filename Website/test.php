<!DOCTYPE html>
<html>
<body>
<?php
require_once('config.php');

     $sqlQuery="select image from product";
	 $queryResult = $conn->query($sqlQuery);
	 $rowObj = $queryResult->fetchObject();
	echo "<div class='img-block'><img src= '{$rowObj->image}'/></div>";
     
?>
     

</body>
</html>