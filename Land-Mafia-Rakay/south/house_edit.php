<?php
include "../db.php";

session_start();

$id=$_GET['id'];
$_SESSION['IDD']=$id;
//echo "Sup ". $id;
$query="SELECT * FROM `house_sell` WHERE id = '$id'";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($result);

//header("Location: south/listings.php");

if(!isset($_SESSION['username']))
{
    echo"<script>alert('You need to login first')</script>";
     echo"<a href='../Login.php'>Go back to login page</a> because ";
     die("you need to login first");
     //echo"<input type='submit' ";
    // header("Location: ../Login.php");
}

$username = $_SESSION['username']
?>

<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Edit</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
   <style>

/*body
    {
        font-family: Arial, Helvetica, sans-serif;
    }*/

* {
  box-sizing: border-box;
}

/* Add padding to containers */
/*.container 
{
    padding: 16px;
}
*/

/* Full-width input fields */
input[type=text], input[type=password], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #DADADA;
}

textarea{
    height: 150px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #B9B9B9;
  outline: none;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #947054;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  float:center;

  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

.label
{
    color:#947054;
    font-weight: bold;
}
    </style> 

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>South - Real Estate Agency Template | Listings</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Preloader -->
  <!--   <div id="preloader">
        <div class="south-load"></div>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address">
                   
                </div>
                <div class="phone-number d-flex">
                    <div class="icon">
                        <img src="img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+45 677 8993000 223">+09 00 78601 223</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="Listings.php">Pages</a>
  <!--                                   <ul class="dropdown">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="#">Listings</a></li>
                                            <ul class="dropdown">
                                                <li><a href="listings.php">Listings</a></li>
                                                <li><a href="single-listings.php">Single Listings</a></li>
                                            </ul>
                                        <li><a href="#">Blog</a>
                                            <ul class="dropdown">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="single-blog.php">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="listings.php">Properties</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="house_sell.php">Sell</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <?php

                                    if(isset($_SESSION['username']))
                                {
                                

                                    //echo"<button href='Delete.php'>Delete Everything</button";

                                    echo"<li><a href='#'>". $_SESSION['username']. "</a>";
                                    echo"
                                            <ul class='dropdown'>
                                            <li><a href='../Logout.php'>Logout</a></li>";
                                            if($_SESSION['username']=='Admin')
                                            {
                                                echo "<li><a href='../Delete.php'>Delete</a></li>
                                                </ul>
                                                </li> ";
                                            }else
                                            {
                                                echo"</ul>
                                                 </li>";
                                            }
                                }
                                else
                                {
                                    echo"<li><a href='../Login.php'>Login</a></li>";
                                }

                            ?>
                            </ul>

                            <!-- Search Form -->
<!--                             <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div> -->
            

                            <!-- Search Button -->
<!--                             <a href="#" class="searchbtn"><i class="fa" aria-hidden="true">Login</i></a>
                        </div>  -->
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->



    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h3 class="breadcumb-title">SELL YOUR PROPERTY</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="listings-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="listings-top-meta d-flex justify-content-between mb-25">
                        <div class="view-area d-flex align-items-center">
                        <!--   
                          <span>View as:</span>
                            <div class="grid_view ml-15"><a href="#" class="active"><i class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15"><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="order-by-area d-flex align-items-center">
                            <span class="mr-15">Order by:</span>
                             <select>
                              <option selected>Default</option>
                              <option value="1">Newest</option>
                              <option value="2">Sales</option>
                              <option value="3">Ratings</option>
                              <option value="3">Popularity</option>
                            </select> -->
                        </div>
                    </div>
                </div>
            </div>

    <!-- ##### Breadcumb Area End ##### -->


    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Listing Content Wrapper Area Start ##### -->



 <div class="container">
      <div class="row">

        <div class="col-md1 col-lg-1 col-sm-1 col-xs-1">
        </div>

        <div class="col-md-10 col-lg-10 col-sm-10 col-xs-10"> 

            <form action="house_edit_creation.php" method = "POST" enctype="multipart/form-data">

            <!-- <label class="label" for="Name" >Owner's Name</label>
            <input type="text" name = "owner_name" id="Name" value="<?php //echo $username; ?>" placeholder="Enter Name"> -->

            <label class="label" for="Phone"> Phone Number </label>
            <input type="text" name = "owner_ph" id="Phone" placeholder="Enter Phone Number" value ='<?php  echo $data['owner_ph'] ?>'required>

            <label class="label" for="price"> Price </label>
            <input type="text" name = "price" id="price" placeholder="Enter Price in Rs." value ='<?php  echo $data['house_price'] ?>' required>

            <label class="label" for="area"> House Size </label>
            <input type="text" name = "area" id ="area" placeholder="Enter Size in Sq Ft." value ='<?php  echo $data['marla_sq_ft'] ?>' required>


            <label class="label" for="title"> Title: </label>
            <input type="text" name = "title" id="title" placeholder="Enter Post Title" value ='<?php  echo $data['title'] ?>' required>


            <label class="label" for="description"> Description </label>
            <input type='text' name = "description" id="description" style='height:150px;' placeholder="Enter Short Description of What You Are Selling i.e. 2 Bathrooms, 2 Bedrooms etc." value ='<?php  echo $data['description'] ?>' required></input>

            <label class="label" for="location"> Location </label>
            <input type="text" name = "location" id="location" placeholder="Enter Address of Property" value ='<?php  echo $data['location'] ?>' required>


            <label> Image upload </label>
            <input type="file" name= "image" required> 

            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
            </div>

            <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
            <input type="submit" name='submit' class="registerbtn"></input>
            </div>

            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3">
            </div>

        </div>
        <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
      </div>

</form>
</body>
</html>