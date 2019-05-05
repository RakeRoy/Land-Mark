<?php
include "db.php";
session_start();

$query="DELETE FROM `house_sell` WHERE id > 0";
mysqli_query($connection, $query);
header("Location: south/listings.php");

?>