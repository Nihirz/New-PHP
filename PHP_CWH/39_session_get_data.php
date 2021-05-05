<?php 
// start the session
session_start();
if (isset($_SESSION['username'])){
echo "Wellcome".$_SESSION['username'];
echo "<br>Your favorite category is".$_SESSION['FavCat'] ;
echo "<br>";
}
else{
	echo "Please Log in to Continue";
}
?>