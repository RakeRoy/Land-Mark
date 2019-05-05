<?php
include "db.php";
session_start();
$id=$_GET['id'];
echo "Sup ". $id;
$query="DELETE FROM `house_sell` WHERE id = '$id'";
mysqli_query($connection, $query);
header("Location: south/listings.php");

?>