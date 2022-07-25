<?php

$name = $_REQUEST['name'];
$id = $_REQUEST['id'];
$pass = $_REQUEST['password'];
$Cpass = $_REQUEST['Cpassword'];
$userType = $_REQUEST['type'];


	if($name == null || $pass == null || $Cpass == null || $id == null || $userType == null)
	{
		echo "invalid input";


	}

	else 
	{
		$info = $userType.'|'.$id.'|'.$pass.'|'.$userType."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $info);


		//setcookie("status", 'true', time()+50000, '/');
		header('location:login.html');
	}





?>