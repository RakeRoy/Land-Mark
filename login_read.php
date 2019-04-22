<?php





	$connection=mysqli_connect('localhost', 'root', '', 'loginapp');
	if($connection)
	{
		echo "We are connected.";
	}else
	{
		die("Data connection failed");
	}


	$query = "SELECT * FROM users"  ;

	$result = mysqli_query($connection, $query);

	if (!$result)
	{
		die('Query Failed' . mysqli_error());
	}	


?>
<!doctype html>
<head>
</head>


<body>

<?php


	while($row = mysqli_fetch_assoc($result))
	{


		?>

		<pre>
			<?php
				print_r($row);
				?>
			</pre>

			<?php 
	}






?>