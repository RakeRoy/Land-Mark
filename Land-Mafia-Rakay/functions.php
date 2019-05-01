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


	function login()
	{
		global $connection;
		session_start();
		
		if(isset($_SESSION['username']))
		{
			//Just a check to see if sessions are working
			echo $_SESSION['username'] . " from the session value from the start\n";
		}

		if(isset($_POST['login']))
		{

		  $username = $_POST['username'];
		  $password = $_POST['password'];

		  $username =  mysqli_real_escape_string($connection, $username);
		  $password =  mysqli_real_escape_string($connection, $password);

		  
		  $hashFormat="2y$10$";
		  $salt = "iusesomecrazystrings22";
		  $hashF_and_salt = $hashFormat . $salt;
		  $password = crypt($password, $hashF_and_salt);
		  $r_password=$password;


		  $query = "SELECT * from users WHERE username = '$username' && password = '$password' ";
		  $select_user_query = mysqli_query($connection, $query);

		  $num=mysqli_num_rows($select_user_query);

		  if($num==1)
		  {
		    $_SESSION['username']=$username;
		    echo $_SESSION['username'] . " has been set as username";
		    header("Location: logout.php");
		    exit();
		  } 
		  else
		  {
		    //echo "No user is connected nigga.";
		    echo "<script>alert('Username does not match with any password')</script>;";
		  }


		  if (!$select_user_query)
		  {
		    die("Query failed") . mysqli_error($connection);
		  }

		  while($row = mysqli_fetch_array($select_user_query))
		  {
		   // echo $row ['username'];
		  }

		}
	}