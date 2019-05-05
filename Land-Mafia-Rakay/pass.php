<?php
$pass="@#$%%";
$encode=base64_encode($pass);
echo "$encode";
$decode=base64_decode($encode);
echo"$decode";
?>
