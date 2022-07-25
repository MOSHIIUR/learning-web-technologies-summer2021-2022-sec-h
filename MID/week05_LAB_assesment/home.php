<?php

If(isset($_COOKIE['status']))
{

?>

<html>
<head>
	<title>Test</title>
</head>
<body>

	<table>
		<tr><td><h1>Welcome</h1></td></tr>
		<tr><td><a href="profile.php">Profile</a> </td></tr>
		<tr><td><a href="passChange.php">Change Password</a> </td></tr>
		<tr><td><a href="userList.php">View User</a> </td></tr>
		<tr><td><a href="logout.php">Logout</a> </td></tr>

	</table>
	
</body>
</html>

<?php

}

?>




