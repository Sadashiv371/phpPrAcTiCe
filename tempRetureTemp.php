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


<div class="card text-white bg-info mb-3" style="max-width: 700px; margin: auto">
    <div class="card-header" style="margin: auto">Temperature</div>
    <div class="card-body">

        <form action="tempRetureTemp.php" method="post" style="font-size: 20px; color: dimgrey" class="text-center">
            <input type="text" name="temp" placeholder="Enter Temperature" style="border-radius: 5px"><br>
            <!--<input type="submit" name="submit" placeholder="cheakT">-->
            <input type="submit"  class="btn btn-light my-3" name="submit"  ><br>

            <section style="font-family: Amiri;text-align: center; font-size: 20px">
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

        </form>
    </div>
</div>









</body>
</html>