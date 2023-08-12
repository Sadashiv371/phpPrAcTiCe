<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="pract3.php"method="post">
    label: <input type="text" name="label"><br><br>
    labelx: <input type="text" name="labelx"><br><br>
    <input type="submit" name="total" value="total">
</form>


</body>
</html>

<?php

    $label = $_POST["label"];
    $labelx = $_POST["labelx"];
    
    #$total = abs($label);
    #$total = round($label);
    $total = pow($label, $labelx);
   
    echo $total;

?>