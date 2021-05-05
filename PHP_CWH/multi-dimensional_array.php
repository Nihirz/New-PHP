<?php
echo "Well-come to Multi-Dimensional Array's world<br>";

//Creating two Array

$multiDim = array (
	array(2,5,7,8),
	array(1,2,3,1),
	array(4,5,0,1));

//echo var_dump($multiDim);  #this displays all value at single line...
echo "<br>";


//printing the content of 2 dimensional array..
// echo $multiDim[0][0];  


#Proper output for multidimensional array...

/*for ($i=0; $i < count($multiDim) ; $i++) { 
	echo var_dump($multiDim[$i]);
	echo "<br>";
}*/

#Not easy but work cool for in for loop for multidimensional array

for ($i=0; $i < count($multiDim) ; $i++) { 
	for ($j=0; $j < count($multiDim[$i]); $j++) { 
		echo $multiDim[$i][$j];
		echo " ";
	}
	echo "<br>";
}



?>