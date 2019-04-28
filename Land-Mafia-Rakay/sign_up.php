	<?php

	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="land_mafia";

$connection = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if($connection->connect_error)
{
	echo"Not Connected";
}
else
{
	echo"Connected";
}	
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['psw'];
$r_password=$_POST['psw-repeat'];
$city=$_POST['other_city'];
$address=$_POST['address'];

	$username =  mysqli_real_escape_string($connection, $username);
	$password =  mysqli_real_escape_string($connection, $password);
	if($password==$r_password)
	{
		
		$INSERT ="INSERT INTO `users`(`username`, `email`, `password`, `r_password`, `city`, `address`) VALUES ('$username','$email','$password','$r_password','$city','$address')";

		mysqli_query($connection,$INSERT);
	}
	else
	{
		echo"<script>alert('Password does not match')</script>";
	}

?>
