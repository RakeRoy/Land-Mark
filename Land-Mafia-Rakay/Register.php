<?php
include "db.php";
include "functions.php";
sign_up();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Register.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="login.php">

</head>
<body>

<form action="Register.php" method="POST">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-2 col-xs-1">
      </div>

      <div class="col-md-4 col-lg-4 col-sm-8 col-xs-10">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Full Name" name="name" id="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter City Name" name="city" id="city"/ required></input>

        </select></br>

        <label for="address"><b>Address</b>(*)</label>
        <input type="text" placeholder="Enter Full Address" id="address" name="address" required></input>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <input type="submit" name='submit' class="registerbtn">Register</input>


    </div>
  </div>

  <div class="signin">

        <p>Already have an account? <a href="Login.html">Sign in</a>.</p>
  </div>
  <div class="col-md-4 col-lg-4 col-sm-2 col-xs-1">
  </div>


    </div>
    </div>
  </div>





</form>

</body>
</html>

