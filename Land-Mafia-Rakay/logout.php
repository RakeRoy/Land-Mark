<?php

session_start();

if(isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
	session_destroy();
	//echo "<br><br>User has been logged out, please refresh the page.";

	header("location:south/listings.php");

?>