<?php
$fptr = fopen("myfile.txt", "r");  #to open and edit files..
// echo var_dump($fptr);
if(!$fptr){
	die("Unable to open this file Please Entre the Valid file");
}
$content = fread($fptr, filesize("myfile.txt"));
fclose($fptr); #To Close file and its nessecery to close file after done the work cause its useges ram and processor...
echo "$content";

?>