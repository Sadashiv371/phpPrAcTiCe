<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$x = 1;

while ($x <= 5) {
    echo "no is greater than : $x <br>";
    $x++;
}


?>

<!--do while loop-->

<?php
$x = 12;
do {
    echo("the number is $x <br> <br>");
    $x++;
} while ($x <= 50);

?>


<!--for loop -->

<?php
$x=1;

for ($x=0; $x <100 ; $x++) { 
    echo "  <h3>GOOD NIGHT MY LOVELY LIFE PARTNER❤️🌜</h3><br>   <h3>GOOD NIGHT MY LOVELY LIFE PARTNER❤️🌜</h3><br>";
    
}

?>
<!--for each loop -->

<?php
        $color = array("red","green","blue","orange");
        foreach ($color as  $value) {
           echo "$value <br>";
        }
  ?>


</body>
</html>