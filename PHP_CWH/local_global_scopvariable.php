<?php

echo "Welcome to scope and local/global variable in php<br>";
$a = 98;  #global variable
$b = 9;

function printValue(){
	//$a = 97;  #loacl variable
	global $a , $b;   #give me the access to thid globle variable
	$a = 100;
	$b = 1000;
	echo "<br>The value of your variable is $a and b is $b"  ;
}

echo $a;
printValue();
echo "<br>The Value of your variable is $a and b is $b";
echo "<br>";
echo var_dump($$GLOBALS['a']);
echo var_dump($$GLOBALS['b']);



?>