<?php 


	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "dbnihir";


	$conn = mysqli_connect($servername, $username, $password, $database);
	//die if connection was not successfull..
	if (!$conn) {
	 	die("sorry we failed to connect to database: ". mysqli_connect_error());
	}
	else {
		echo("Connectoin was successfull");
	} 

//Create table in the DATABASE
	$sql = "CREATE TABLE `phptrip` ( `sno` INT(6) NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(12) NOT NULL ,  `dest` VARCHAR(6) NOT NULL ,    PRIMARY KEY  (`sno`))";
	$result = mysqli_query($conn, $sql);

//check for the table creation

	if ($result) {
		echo("the table was create successfully :)<br>");
	}
	else{
		echo"table was not created because of this error:".mysqli_connect_error($conn);
	}





?>