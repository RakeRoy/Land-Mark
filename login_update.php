<?php
	include "db.php";
	include "functions.php";
?>

<?php

if(isset($_POST['submit']))
{
	UpdateTable();
}


?>

<!doctype html>
<head>
</head>


<body>


	<form action ="login_update.php" method="post">
	<p>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" placeholder="Enter Username">
	</p>
 
	<p>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" placeholder="Enter Password">
	</p>

	<select name="id" id=""> 

	<?php
		showAllData();
	?>

	</select>

	<p>
		<input type ="submit" name="submit" value ="UPDATE">
	</p> 