	<?php

	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="land-mafia";

$connection_obj = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if($connection_obj->connect_error)
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
	if($password==$r_password)
	{
		
		$INSERT ="INSERT INTO `land_mafia`(`username`, `email`, `password`, `r_password`, `city`, `address`) VALUES ('$username','$email','$password','$r_password','$city','$address')";

		mysqli_query($connection_obj,$INSERT);
	}
	else
	{
		echo"<script>alert('Password does not match')</script>";
	}

?>
