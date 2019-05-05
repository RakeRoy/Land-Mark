<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>About Us</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

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
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="listings.php">Listings</a>
<!--                                             <ul class="dropdown">
                                                <li><a href="listings.php">Listings</a></li>
                                                <li><a href="single-listings.php">Single Listings</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul class="dropdown">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="single-blog.php">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
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
                        <h3 class="breadcumb-title">About us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->



    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>We search for the perfect home</h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>
                    <div class="about-content">
                        <img class="wow fadeInUp" data-wow-delay="350ms" src="img/bg-img/about.jpg" alt="">
                        <p class="wow fadeInUp" data-wow-delay="450ms">Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada. Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula.</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Featured Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>

                    <div class="featured-properties-slides owl-carousel wow fadeInUp" data-wow-delay="350ms">

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature1.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature2.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature3.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Villa in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Single Slide -->
                        <div class="single-featured-property">
                            <!-- Property Thumbnail -->
                            <div class="property-thumb">
                                <img src="img/bg-img/feature4.jpg" alt="">

                                <div class="tag">
                                    <span>For Sale</span>
                                </div>
                                <div class="list-price">
                                    <p>$945 679</p>
                                </div>
                            </div>
                            <!-- Property Content -->
                            <div class="property-content">
                                <h5>Town House in Los Angeles</h5>
                                <p class="location"><img src="img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                                <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                                <div class="property-meta-data d-flex align-items-end justify-content-between">
                                    <div class="new-tag">
                                        <img src="img/icons/new.png" alt="">
                                    </div>
                                    <div class="bathroom">
                                        <img src="img/icons/bathtub.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="garage">
                                        <img src="img/icons/garage.png" alt="">
                                        <span>2</span>
                                    </div>
                                    <div class="space">
                                        <img src="img/icons/space.png" alt="">
                                        <span>120 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Suspendisse dictum enim sit amet libero malesuada feugiat.</h6>
                        <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### -->
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Meet The Team</h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img style="height: 350px;" src="img/bg-img/Rakay.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Rakay Shahid</h2>
                                <p>Leader, Front End Designer, Developer, Back End Designer</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +92 306 6678376</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> 172076@students.au.edu.pk</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img src="img/bg-img/mateen.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Abdul Mateen</h2>
                                <p>Moral Supporter</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +92 3047673800</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> mateen@yahoo.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                               <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img style="height: 350px;" src="img/bg-img/Hashir.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Hashir Kayani</h2>
                                <p>Moral Supporter</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +92 310 6710236</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> hashirking@yahoo.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                               <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img style="height: 350px;" src="img/bg-img/Amaan.jpg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Amaan Shafique</h2>
                                <p>Moral Supporter</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +92 311 6069802</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> 172042@students.au.edu.pk</h6>
                            </div>
                        </div>
                    </div>
                </div>
                               <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img style="height: 350px;" src="img/bg-img/Shoukat2.jpeg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Mohammad Shaokat</h2>
                                <p>Moral Supporter</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +92 343 6949066</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> 172054@students.au.edu.pk</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Team Member Thumb -->
                        <div class="team-member-thumb">
                            <img style="height: 350px;" src="img/bg-img/albash2.jpeg" alt="">
                        </div>
                        <!-- Team Member Info -->
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="img/icons/prize.png" alt="">
                                <h2>Albash Khan</h2>
                                <p>Moral Supporter</p>
                            </div>
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +92 300 9634136</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> 172068@students.au.edu.pk</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Meet The Team Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0 bg-img gradient-background-overlay" style="background-image: url(img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>About Us</h6>
                            </div>

                            <img src="img/bg-img/footer.jpg" alt="">
                            <div class="footer-logo my-4">
                                <img src="img/core-img/logo.png" alt="">
                            </div>
                            <p>Integer nec bibendum lacus. Suspen disse dictum enim sit amet libero males uada feugiat. Praesent malesuada.</p>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>09 AM - 19 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09 AM - 14 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                            <div class="address">
                                <h6><img src="img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="img/icons/envelope.png" alt=""> office@template.com</h6>
                                <h6><img src="img/icons/location.png" alt=""> Main Str. no 45-46, b3, 56832, Los Angeles, CA</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Useful Links</h6>
                            </div>
                            <!-- Nav -->
                            <ul class="useful-links-nav d-flex align-items-center">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Listings</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Elements</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Featured Properties</h6>
                            </div>
                            <!-- Featured Properties Slides -->
                            <div class="featured-properties-slides owl-carousel">
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                                <!-- Single Slide -->
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="img/bg-img/fea-product.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Copywrite Text -->
        <div class="copywrite-text d-flex align-items-center justify-content-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>