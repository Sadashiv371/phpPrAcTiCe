<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="temperature.php" method="post" style="font-size: 40px; color: burlywood"   >
            enter the temperature :<input type="text" name="temp" placeholder="Enter Temperature" ><br><br>
            <input type="submit" name="submit" placeholder="cheakT">
        </form>

    <section style="color: firebrick; font-family: Algerian; font-size: medium">
    <?php
    $temp = null;
    $temp = $_POST["temp"];
    if ($temp<0){
        echo "too COLD";
    }
    elseif ($temp<10){
        echo "pretty chill";
    }
    elseif ($temp<20){
        echo "pretty NICE outsidE";
    }
    elseif ($temp<35){
        echo "pretty warm outside";
    }
    else{
        echo "Too HOT";
    }
    ?>
    </section>
</body>
</html>