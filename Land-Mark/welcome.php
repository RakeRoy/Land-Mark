<?php
include "db.php";
include "functions.php";

session_start();
$user=$_SESSION['username'];	
if(isset($_POST['Logout']))
{
	session_destroy();
}
echo $user;

?>
<!Doctype html>	
<html>
<?php 
echo "Welome " . $user;?>

<form action="welcome.php" method = "POST">
	<label> About time you log out </label>
	<input type = "submit" name = 'Logout' value = "Logout">