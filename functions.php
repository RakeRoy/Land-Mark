<?php

include "db.php";


function showAllData()
{
	global $connection;	
	$query = "SELECT * FROM users"  ;

	$result = mysqli_query($connection, $query);

	if (!$result)
	{
		die('Query Failed' . mysqli_error());
	}	

		while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['id'];
		echo"<option value='$id'>$id</option>";
	}

}

function UpdateTable()
{
		
	global $connection;	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id=$_POST['id'];

	$query = "UPDATE users SET ";
	$query.= "username = '$username', ";
	$query.= "password = '$password' ";
	$query.= "WHERE id = $id ";


	$result = mysqli_query($connection, $query);

	if (!$result)
	{ 
		die("Query failed af nibba" . mysqli_error($connection));
	}


}


?>