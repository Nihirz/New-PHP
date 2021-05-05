<?php


#best example is in associate array.php for more just visit is.....

echo "Welcome to the word of foreach loops :) <br>";

$arr = array("banana", "apple","Harpic","bread","butter",);

//for ($i=0; $i < count($arr);$i++){

//	echo $arr[$i];
//	echo "<br>";}


//better way to do this - for each loops

foreach ($arr as $value) {
	echo "$value <br>";
}





?>