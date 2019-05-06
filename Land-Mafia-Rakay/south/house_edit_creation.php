<?php

include'../db.php';
session_start();
//if (isset)

$id = $_SESSION['IDD'];
$ownerName= $_SESSION['username'];
$ownerPhone= $_POST['owner_ph'];
$price= $_POST['price'];
$area= $_POST['area'];
$title = $_POST['title'];
$description= $_POST['description'];
$location = $_POST['location'];


print_r($_POST);
//$query = "INSERT INTO `house_sell`(`owner_name`, `owner_ph`, `house_price`, `marla_sq_ft`, `title`, `description`, `location`) VALUES ('$ownerName','$ownerPhone','$price','$area','$title','$description', '$location') WHERE id = '$id'";


// $query="UPDATE `house_sell` SET `owner_ph`=['$ownerPhone'],`house_price`=['$price'],`marla_sq_ft`=['$area'],`title`=['$title'],`description`=['$description'],`location`=['$location'] WHERE id='$id'";

$query="UPDATE `house_sell` SET `owner_ph`='".$ownerPhone."',`house_price`='".$price."',`marla_sq_ft`='".$area."',`title`='".$title."',`description`='".$description."',`location`='".$location."' WHERE id='$id'";

$result = mysqli_query($connection, $query);

$query = "SELECT '$id' as ID FROM house_sell";
$id = mysqli_query($connection, $query);

$id = mysqli_fetch_assoc($id);
$id = $id['ID'];
$path = "../images/";

$filename = $_FILES['image']['tmp_name'];
move_uploaded_file($filename, $path . $id . ".jpg");


header("location:listings.php");