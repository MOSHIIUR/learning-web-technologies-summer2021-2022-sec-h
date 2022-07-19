<?php 

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
//$fname = $_REQUEST['fname'];

if($username == null || $password == null || $email == null){
	echo "null username/password/email...";
}else{
		require('../model/function.php');
		$status = insertUser($username, $password, $email);
		if($status){
			//header('location: ../view/home.php');
			echo '<h1>Insertion Successfull</h1>';			

		}else{
			//header('location: ../view/home.php');
			echo '<h1>unable to add</h1>';			
		}

}

?>