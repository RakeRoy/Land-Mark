<?php

session_start();

if(isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
	echo "Welcome ";
	echo $username;

}
else
{
	echo "No user is connected";      	
}
if (isset($_POST['logout']))
{
	session_destroy();
	echo "<br><br>User has been logged out, please refresh the page.";
}

?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form method="POST" action="logout.php">
		<input type="submit" name = "logout" value = "Logout">


	</form>
	<br>
	<a href='login.php'>Go back to login page.</a>
</body>
</html>