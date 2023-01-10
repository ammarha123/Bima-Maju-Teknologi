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
        $query = "INSERT INTO user_message (name, email, subject, message, created_time) VALUES ('$name','$email','$subject','$message', NOW())";
        mysqli_query($con, $query);
        if ($query) {
          echo "<script>alert('Message Sent');</script>";
          echo "<script type='text/javascript'> document.location ='index.php'; </script>";
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
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.9.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .unselectable {
        -webkit-user-select: none;
        -webkit-touch-callout: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #cc0000;
      }
      input.captcha{
      pointer-events: none;
      letter-spacing: 12px;
      text-decoration: dotted line-through;
      background-color: yellow;
      text-align: center;
    }
  </style>
  <?php include("log.php");?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">BizLand<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo"><img src="assets/img/LogoBMT.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="product.php">Product</a></li>
          <li><a class="nav-link scrollto" href="profile.php">Profile</a></li>
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
      <h1>You Dream, <span>We Display</span></h1>
      <h2>Bring your dreams to life<br>People dream of the future and<br>
        Share their dreams to each other</h2>
 Button trigger modal -->
<!-- <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal">
  Book Now
</button> --> -->


    </div> -->
  </section><!-- End Hero --> 

<!-- Modal Style-->
  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Book Now</h5>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <img src="assets/img/tick.gif" class="img-fluid rounded" alt="">
            <h1 style="text-align: center;"><i class="fa fa-phone-square" style="font-size:48px;color:orange"></i> Call Us</h1>
            <h5 style="text-align: center;">(+62) 213 505000</h5><br>
            <div class="d-grid gap-2 col-4 mx-auto">
              <button class="btn btn-outline-secondary" data-bs-dismiss="modal" type="button">OK</button>
              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="d-grid gap-0 col- 8 mx-auto">
          <h5>Let Us Know Your Need, We are Happy to Help <i class="fa fa-smile-o" style="font-size:20px"></i> </h5>
        </div>
        </div>
      </div>
    </div>
  </div>

  <!--Main Section-->
  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3>Main Products</h3>
        </div>
        <div class="row">
        <?php
                $query = "SELECT*FROM main_product";
                $query_run=mysqli_query($con,$query);
                $check = mysqli_num_rows($query_run)>0;
                if ($check) {
                    while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
					
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="portfolio-info">
                <a href="img/<?php echo $row['filename'] ?>" class="portfolio-lightbox preview-link" title="<?php echo $row['title']?>">
                  <img src="img/<?php echo $row['filename'] ?>" class="img-fluid rounded" alt="">
                </a>
              </div>
              <h4 class="title"><a href="product.php#<?php echo $row['title']?>"><br><?php echo $row['title']?></a></h4>
            </div>
          </div>
                    <?php
                    }
                  }
                  else
                  {
                    echo "no data record found";
                  }
                  ?>
      



        </div>

      </div>
    </section><!-- End Featured Services Section -->


   
    <!-- ======= Services Section ======= -->
    <section id="services-home" class="services-home">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Check Our Services</h3>
        </div>

          <div class="row">
          <?php
                $query = "SELECT*FROM main_service";
                $query_run=mysqli_query($con,$query);
                $check = mysqli_num_rows($query_run)>0;
                if ($check) {
                    while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
					<div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <a href="img/<?php echo $row['filename']?>" class="portfolio-lightbox preview-link img-fluid rounded mx-auto d-block" alt="">
                  <img src="img/<?php echo $row['filename']?>" style="width:400px;height:300px;" class="img-fluid rounded" alt="">
                </a>
                <h2></h2>
              </div>
            </div>
                    <?php
                    }
                  }
                  else
                  {
                    echo "no data record found";
                  }
                  ?>
        </div>
        <br>
        <div class="text-center">
          <a href="product.php"><button type="submit">Discover More</button></a>
        </div>
      </div>
    </section><!-- End Services Section -->

     <!-- ======= Clients Section ======= -->
     <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">
        
          <h3>Our Partner</h3>

          <div class="row gy-5">
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/samsunglogo.png" class="img-fluid" alt=""></div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="post-box">
                <div class="post-img"><img src="assets/img/lglogo.png" class="img-fluid" alt=""></div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="post-box">
                <br>
                <br>
                <div class="post-img"><img src="assets/img/panasoniclogo.png" class="img-fluid" alt=""></div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
              <br>  
              <div class="post-box">
                <div class="post-img"><img src="assets/img/boschlogo.png" class="img-fluid" alt=""></div>
              </div>
            </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h3 id="contactus">Contact Us</h3>
          <p>Please let us know if you have any questions about our service, products, or availability Book an appoinment online with us or fell free
            to call or text! located in central jakarta.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Wisma BSG 3A floor, Jl. Abdul Muis,<br>
                No.40, RT.1/RW.8, South Petojo, Central Jakarta</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@bimamajuteknologi.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>0213505000</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6657292316145!2d106.81808671476891!3d-6.175485545529127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d51f5efe9f%3A0xad1561309adf6456!2sWisma%20BSG!5e0!3m2!1sen!2sid!4v1664944666795!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-lg-6">
            <form method="post" class="email-form">
              <div class="row">
                <p style="text-align:center ;">Let's get this conversation started. <br>Tell us a bit about yourself and send your message below.</p>
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" id="message" placeholder="Message" required></textarea>
              </div>
              <div class="form-group text-center">
                <div class="unselectable">
              <input type="text" class ="captcha form-control fw-bold" name="captcha" value="<?php echo substr(uniqid(), 6); ?>">
              </div>
              <input type="text" class="form-control" name="confirmcaptcha" placeholder="Input Captcha" value="" required>
             </div>
              <div class="text-center"><button type="submit" name="send" id="send">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="profile.php">About us</a></li>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>