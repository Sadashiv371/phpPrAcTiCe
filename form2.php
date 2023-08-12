
<?php

	if(isset($_POST['submit'])){
		echo "hello ";

			$min = 3;
			$max=10;

		$db = array("sadashiva","phooolkumari","john");

		$username = $_POST['name'];
		$password = $_POST['passwd'];


		if(strlen($username)<$min){
			echo("it must be greater than 3");
		}

		if(strlen($username)>$max)
		{
			echo "it must be less than 8";
		}

			if (! in_array($username, $db)) {
				echo "sorry register yourself";
				// code...
			}else
			echo "welcome $username";
	}


?>








<!DOCTYPE HTML>
<html>  
<body>


	<form action="form_process.php" method="post">
		<input type="text" name="name" placeholder="usename"> <br><br>
		<input type="password" name="passwd" placeholder="enter pswd"><br><br>
		<input type="submit" name="submit" value="submit">

	</form>