<?php
echo "well come to writes file of php\n";
/*$fptr = fopen("myfile2.txt", "w"); 
fwrite($fptr, "This is the best file of planet\n");
fwrite($fptr, "This is onther content\n");
fwrite($fptr, "This is onther contents\n");
fclose($fptr);
*/
//Appendint to a file in php
$fptr = fopen("myfile2.txt", "a");
fwrite($fptr , "this is being append to the file\n");
fclose($fptr);

?>