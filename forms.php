<?php 
    if(isset($_POST['submit'])){

        $min = 5;
        $max = 10;
        $db = array("maria","sadashiva","mohad","sabrina");

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (strlen($username)<$min) {
            echo "your name must be morethan 8 charachter";
            // code...
        }
        if (strlen($username)>$max) {
            echo "username cannot be greater than 10";
            // code...
        }
        if(!in_array($username, $db))
        {
            echo "you are not allowed";
        }
        else
        {
            echo "welcome";
        }


    }
        
   
   
   
?>


<!DOCTYPE HTML>
<html>  
<body>

<form action="forms.php" method="post">
<input type="text" name="username" placeholder="enter username" ><br><br>
 <input type="password" name="password" placeholder="enter password"><br><br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>

