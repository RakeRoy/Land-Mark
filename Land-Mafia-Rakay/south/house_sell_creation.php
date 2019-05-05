<?php

include'../db.php';

//if (isset)


$ownerName= $_POST['owner_name'];
$ownerPhone= $_POST['owner_ph'];
$price= $_POST['price'];
$area= $_POST['area'];
$title = $_POST['title'];
$description= $_POST['description'];
$location = $_POST['location'];


$query = "INSERT INTO `house_sell`(`owner_name`, `owner_ph`, `house_price`, `marla_sq_ft`, `title`, `description`, `location`) VALUES ('$ownerName','$ownerPhone','$price','$area','$title','$description', '$location')";

$result = mysqli_query($connection, $query);

$query = "SELECT MAX(id) as ID FROM house_sell";
$id = mysqli_query($connection, $query);

$id = mysqli_fetch_assoc($id);
$id = $id['ID'];
$path = "../images/";

$filename = $_FILES['image']['tmp_name'];
move_uploaded_file($filename, $path . $id . ".jpg");


header("location:listings.php");



