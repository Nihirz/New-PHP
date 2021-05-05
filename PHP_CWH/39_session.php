<?php #session


// verify user log in info
session_start();
$_SESSION['username'] = "Nihir";
$_SESSION['FavCat'] = "Books";
echo "We have saved session";

?>