<?php

$fptr = fopen("myfile.txt", "r");  #to open and edit files..
echo fgets($fptr);
echo fgets($fptr);
echo fgets($fptr);
//echo var_dump(fgets($fptr));
 
 //reading file line by line..

/*while($a =  fgets($fptr)){
	echo "$a";	;
}
echo "<br>";*/
//reading file cherector by cherector

/*while($a =  fgetc($fptr)){
	echo "$a";	
break;
}*/

// echo "End of the file has been reached";

//write a program which reads the content of the file until has been ancountered

while ($a = fgetc($fptr)) {
	echo "$a";
	if ($a == "."){
		break;
	}
}
fclose($fptr);

?>