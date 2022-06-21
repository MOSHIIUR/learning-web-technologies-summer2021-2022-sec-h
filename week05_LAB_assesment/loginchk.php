<?php


	$id = $_REQUEST['id'];
	$pass = $_REQUEST['password'];


	if($id == null || $pass == null)
	{
		echo "invalid input";


	}

	else 
	{	
		$file = fopen('user.txt', 'r');
		while(!(feof($file)))
		{
			$info = fgets($file);
			$split = explode('|', $info);

			if($split[1]==$id && $split[2]==$pass)
			{
					setcookie("status", 'true', time()+50000, '/');
					header('location:home.php?id=',$id);
			}
		}

		echo "Invalid ID or password";

	}




	?>





?>