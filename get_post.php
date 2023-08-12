<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="get_post.php" method="post">
    Username : <input type="text" placeholder="Username" name="uname"> <br><br>
    Password : <input type="password" placeholder="password" name="password"><br><br>
    <input type="submit" value="login">

</form>

<?php 
    echo $_POST["uname"] . "<br>";
    echo $_POST["password"];
    ?>
</body>
</html>