<?php

#Auto matic change the date in website in bottom like all right reserved etc etc


echo "Welcome to worlds of Dates<br>";

#$d = date("dS F Y"); #for more support the php manull in php.com/documantion/dates
#$d = date("Y dS F");
#$d = date("l");
$d = date("Y dS F ,g:i A");#g:i for using to show time and "A" used for am1:pm
echo "Todays Date is $d <br>";

$year = date("Y");
echo "<br>";
echo "Copyright $year | Allrights Reserved <br>";

?>