<?php

  $host="localhost";
  $dbUsername="root";
  $dbPassword="";
  $dbname="land_mafia";

  $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
  if($connection->connect_error)
  {
  echo"Not Connected";
  }

?>