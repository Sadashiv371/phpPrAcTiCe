<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<section style="padding: 10px; margin: auto; max-width: fit-content ;background-color: aquamarine ">
        <section style="font-family: Amiri;background-color: antiquewhite;max-width: fit-content">
            <form action="temperature.php" method="post" style="font-size: 30px; color: burlywood"   >
                enter the temperature :<input type="text" name="temp" placeholder="Enter Temperature" ><br>
                <!--<input type="submit" name="submit" placeholder="cheakT">-->
                <input type="submit" class="btn btn-danger btn-lg" name="submit" >
            </form>
        </section>

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

</section>
</body>
</html>