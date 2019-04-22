<?php



if(isset($_POST['submit']))
{

	$username=$_POST['username'];
	$password=$_POST['password'];

	//							Host,	Username, psw, database_name
	$connection=mysqli_connect('localhost', 'root', '', 'loginapp');
	if($connection)
	{
		echo "We are connected.";
	}else
	{
		die("Data connection failed");
	}


	$query = "INSERT INTO users (username, password) ";
	$query.= "VALUES ('$username', '$password')";


	$result = mysqli_query($connection, $query);

	if (!$result)
	{
		die('Query Failed' . mysqli_error());
	}	


}





?>
<!doctype html>
<head>
</head>


<body>

	<form action ="login_create.php" method="post">
	<p>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" placeholder="Enter Username">
	</p>

	<p>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="Enter Password">
	</p>

	<p>
		<input type ="submit" name="submit" value ="Submit">
	</p>