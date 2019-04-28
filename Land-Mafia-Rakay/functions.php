<?php
	include "db.php";
	
	function sign_up()
	{
		
		if(isset($_POST['submit']))
		{
			global $connection;
			$username=$_POST['name'];
			$email=$_POST['email'];
			$password=$_POST['psw'];
			$r_password=$_POST['psw-repeat'];
			$city=$_POST['city'];
			$address=$_POST['address'];


			$host="localhost";
			$dbUsername="root";
			$dbPassword="";
			$dbname="land_mafia";

			$connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

			if($password==$r_password)
			{
				$username =  mysqli_real_escape_string($connection, $username);
				$password =  mysqli_real_escape_string($connection, $password);

				$hashFormat="2y$10$";
				$salt = "iusesomecrazystrings22";
				$hashF_and_salt = $hashFormat . $salt;
				$password = crypt($password, $hashF_and_salt);
				$r_password=$password;

				$INSERT ="INSERT INTO `users`(`username`, `email`, `password`, `r_password`, `city`, `address`) VALUES ('$username','$email','$password','$r_password','$city','$address')";

				mysqli_query($connection,$INSERT);
			}
			else
			{
				echo"<script>alert('Password does not match')</script>";
			}
		}
	}