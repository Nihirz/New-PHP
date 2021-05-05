<?php

echo "Wellcome to world of Associative Array<br>";

/*$arr = array('this','that','what');
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
*/

// Associative Arrays

$favCol = array('shubham' => 'red','rohan' => 'green','nihir' => 'blue',8  => 'this');


foreach ($favCol as $key => $value) {
	echo "<br>Favorite Color of $key is $value<br>";
}
/*
echo $favCol['rohan'];
echo "<br>";
echo $favCol['shubham'];
echo "<br>";
echo $favCol['nihir'];
echo "<br>";
echo $favCol['8'];
*/


?>