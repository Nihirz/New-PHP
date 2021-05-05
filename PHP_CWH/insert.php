<?php  

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "dbnihir";

	$conn = mysqli_connect($servername, $username, $password,$database);
	//die if connection was not successfull..
	if (!$conn) {
	 	die("sorry we failed to connect to database: ". mysqli_connect_error());
	}
	 else {
		echo("Connectoin was successfull<br>");
	} 
	//veruiables to inserted into the table...
	$name = "Vikrant";
	$destination = "Russia";


	//sql query to be executed...
	$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES ('$name', '$destination')";
	$result = mysqli_query($conn,$sql);

	//add new trip to the trip table in the database...
	if($result){ 
		echo("record has been insereted successfully <br>");
	}
	else{
		echo"record has been not insereted successfully because of this error:".mysqli_error($conn);
	}

//for delete the record from table
#DELETE FROM `phptrip` WHERE `phptrip`.`sno` = 4;










?>