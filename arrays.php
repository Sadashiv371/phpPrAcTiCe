<?php

$numList = array(10,20,30,40,50,'60',70,80,90,
	'<h1>Sadashiva</h1>');
echo $numList[9];
print_r($numList);



/*ASSOCIATIVE ARRAYS*/

echo "*ASSOCIATIVE ARRAYS";
echo "<br>";
echo
"<br>";

$name = array("first_name" => 'Sadashiva',"last_Name" => 'Oram');
echo $name['first_name'];
echo "<br>";
echo "<br>";
print_r ($name);
echo "<br>";
echo "<br>";
echo "here name is associated as first name by using => symbol, so whwnever we want to derive any name we can just type it as first name and get first name otherwise it shows it inform of array index numbers";
echo "<br>";

echo "<br>";


echo $name['first_name']."  ".$name['last_Name']


?>


