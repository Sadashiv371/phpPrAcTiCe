<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pract2.php" method="post">
    quantity: <input type="text" name="quantity"><br><br>
    <input type="submit" value="total">


    </form>    
<?php 
    $item = "pizza";
    $price = 6;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $price * $quantity;
    echo "you have ordered {$quantity} x {$item}<br>";
    echo "your total quantity is: \${$total}";

?>


</body>
</html>