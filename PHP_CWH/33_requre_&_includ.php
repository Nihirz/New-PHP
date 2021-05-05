<?php
//include '_dbconect.php';  #for shortcut method and clean for coding... 
require '_dbconect.php';    #its smartest way to connect the database...
#this data is import from select_data.php
	$sql = "SELECT * FROM `phptrip`";
	$result = mysqli_query($conn,$sql);
//find the number of records return...
	$num = mysqli_num_rows($result);
	echo $num;
	echo " Records Found in the databse <br>";
?>