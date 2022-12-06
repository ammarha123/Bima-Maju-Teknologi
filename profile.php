<?php

session_start();
error_reporting(0);
include("config.php");

//Databse Connection file
if (isset($_POST['send'])) {
    //getting the post values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
        $query = "INSERT INTO user_message VALUES('', '$name','$email','$subject','$message')";
        mysqli_query($con, $query);
        if ($query) {
          echo
          "
          <script>
            alert('Message Sent');
            document.location.href = 'index.php';
          </script>
          ";
        } else {
          echo "Failed to Send a Message" . mysqli_error($con);
        }
      }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT. Bima Maju Teknologi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/web-icon.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.9.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/img/LogoBMT.png" height="1000" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="product.php">Product</a></li>
          <li><a class="nav-link scrollto active" href="profile.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="service.php">Service</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <!-- <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h3>About Who We Are</h3>
      <h4>Our vision, dreams, passion and history</h4>
    </div> -->
  </section><!-- End Hero --> 

  <main id="main">

    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="section-title">
              <h3>PT. Bima Maju Teknologi</h3>
            </div>
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
              <br><br>
              <img src="assets/img/about1.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
              <h3>We are BMT</h3>
              <p>
                Our company was established in 2018, we are engaged in the sale and installation of displays 
                starting from videowall (indoor, outdoor) and videotron. And now we have added our line of 
                business by providing a sound system installation and projector. With our capabilities, we 
                have been trusted by various companies and government agencies to supply and install displays, 
                we have also been trusted several times to work on an national project, on an international scale.
              </p>
              <h3>Our Vision</h3>
              <p>
                We are committed to providing professional, creative and innovative display products. 
                And we also aspire to become a leading and trusted company in providing displays and sound system needs.
              </p>
              <h3>Our Mission</h3>
              <p>
                Customer smile, we will ensure customer satisfaction, before customers
                 feel satisfied we will work hard and strive to make it happen.
              </p>
            </div>
          </div>
          <br>
          <br>
          
          
        </div>
      </section><!-- End About Section -->

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
           
            <h3>PT. Bima Maju Teknologi<span>.</span></h3>
            <p>
              Wisma BSG 3A floor, <br>Jl. Abdul Muis,<br>
                No.40, RT.1/RW.8, <br>South Petojo, Central Jakarta <br><br>
              <strong>Phone:</strong> +62213505000<br>
              <strong>Email:</strong> info@bimamajuteknologi.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="service.php">Services</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Get in Touch with Us.</h4>
            <ul>
              <li><a href="#contactus"><button type="submit">Contact Us</button></a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h3><span>Contact Us</span></h3>
            <p>We provide products range from videotron, videowall, projector, sound system and we also do the installation
              So.. let us solve your problem and makes you happy</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <br>
            <div class="copyright">
              &copy; Copyright - 2022<strong><span> PT. Bima Maju Teknologi</span></strong>. All Rights Reserved
            </div>
          </div>
          
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>