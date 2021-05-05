<?php
//Connecting to the databse...
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

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' LIMIT 2";
$result = mysqli_query($conn,$sql);

$aff = mysqli_affected_rows($conn);
echo "<br>Number of Affected rows is :".$aff;
echo "<br>";

if($result){
    echo "Deleted Successfully..!<br>";
}
else {
    echo "We Can't Deleted Record Successfully due to this error--->".mysqli_connect_error;
}
?>