<?php
include "db.php";
include "functions.php";
login();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="login.php">
<link rel="stylesheet" href="Login.css">

</head>
<body>

  <h2>Login</h2>

  <form action="login.php" method="POST">

    <div class="container">
      <div class="row">

        <div class="col-md-4 col-lg-4 col-sm-2 col-xs-1">
        </div>
          
          <div class="col-md-4 col-lg-4 col-sm-8 col-xs-10">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>

        
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <input type="submit" name='login' style="width:100%; height: 70px; background-color: green;">

          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
          <span class="signup">Not a member yet?<a href="Register.php"> Sign up! </a> </span>


          <button type="button" class="cancelbtn">Cancel</button>
          <span class="psw"><a href="#">Forgot password?</a></span>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-2 col-xs-1">
      </div>
    </div>
  </div>



</form>

</div>
</body>
</html>
