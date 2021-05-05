<?php


echo "Welcome to the word of function in php :)) <br>";

function processMarks($marksArr){
	$sum = 0;
	foreach ($marksArr as $value) {
		$sum += $value;

	}
	return $value;
}

function avgMarks($marksArr){
	$sum = 0;
	$i = 1;
	foreach ($marksArr as $value) {
		$sum += $value;
		$i++;

	}
	return $sum/$i;
}



$rohanDas = [43,45,46,47,48,49];
#$sumMarks = processMarks($rohanDas);
$sumMarks = avgMarks($rohanDas);

$nihir = [51,55,60,65,70,75];
#$sumMarksNihir = processMarks($nihir);
$sumMarksNihir = avgMarks($nihir);

echo "Total marks scored By RohanDas out of 600 is $sumMarks <br>";
echo "Total marks scored By NihirDas out of 600 is $sumMarksNihir <br>";




?>