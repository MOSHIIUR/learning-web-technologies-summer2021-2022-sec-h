<?php

If(isset($_COOKIE['status']))
{

	$file=fopen("user.txt", 'r');
	while(!(feof($file)))
	{
			$info = fgets($file);
			$data =explode('|', $info);
			if($data[1] == $id)
			{
				?>
<html>

	<body>




		<table border="1">


			<tr><td colspan="2">Profile</td></tr>
			<tr>
				<td>ID</td>
				<td>"$data[1]"</td>
			</tr>

			<tr>
				<td>NAME</td>
				<td>"$data[0]"</td>
			</tr>
			<tr>
				<td>USER TYPE</td>
				<td>"$data[2]"</td>
			</tr>
			<tr>
				<td colspan="2"><a href="home.php">Go Home</a></td>
			</tr>



		</table>
		
	</body>
</html>			

<?php

			}



			else echo "invalid request";

	}
?>








