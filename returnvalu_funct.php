<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function add($no1,$no2)
    {
        $sum = $no1+$no2;
        return $sum;
    }

    $res = add(10,12);
    $res = add(10,$res);
    echo $res;
    
    
    ?>
</body>
</html>