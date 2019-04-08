<?php

		$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="youtube1";

$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if($conn->connect_error)
{
	echo"Not Connecrted";
}
else{
echo"Connected";}	
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['psw'];
$r_password=$_POST['psw-repeat'];
$city=$_POST['other_city'];
$address=$_POST['address'];

		$INSERT ="INSERT INTO `register`(`username`, `email`, `password`, `r_password`, `city`, `address`) VALUES ('$username','$email','$password','$r_password','$city','$address')";
	mysqli_query($conn,$INSERT);