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
    $captcha = $_POST["captcha"];
    $confirmcaptcha = $_POST["confirmcaptcha"];
    if($captcha != $confirmcaptcha){
      echo
      "<script> alert('Incorrect Captcha'); </script>";
    }
    else{
        $query = "INSERT INTO user_message (name, email, subject, message, created_time) VALUES ('$name','$email','$subject','$message', NOW())";
        mysqli_query($con, $query);
        if ($query) {
          echo "<script>alert('Message Sent');</script>";
          echo "<script type='text/javascript'> document.location ='contact.php'; </script>";
        } else {
          echo "Failed to Send a Message" . mysqli_error($con);
        }
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
  <link rel="stylesheet" href="captcha.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href=
"https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity=
"sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
        crossorigin="anonymous">

  <style>
     input.captcha{
      pointer-events: none;
      letter-spacing: 12px;
      text-decoration: dotted line-through;
      background-color: yellow;
      text-align: center;
    }
    .unselectable {
        -webkit-user-select: none;
        -webkit-touch-callout: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #cc0000;
      }
  </style>
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
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="product.php">Product</a></li>
          <li><a class="nav-link scrollto" href="profile.php">Profile</a></li>
          <li><a class="nav-link scrollto" href="service.php">Service</a></li>
          <li><a class="nav-link scrollto active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

  <main id="main">

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
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Wisma%20BSG%203A%20floor,%20Jl.%20Abdul%20Muis,%20No.40,%20RT.1/RW.8,%20South%20Petojo,%20Central%20Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              <a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
              <a href="https://www.embedgooglemap.net">google maps iframe generator</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
            </div>
          </div>
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
                <textarea class="form-control" name="message" rows="5" placeholder="Message" id="message" required></textarea>
              </div>
              <div class="form-group text-center">
                <div class="unselectable">
              <input type="text" class ="captcha form-control" name="captcha" value="<?php echo substr(uniqid(), 6); ?>">
              </div>
              <input type="text" class="form-control" name="confirmcaptcha" placeholder="Input Captcha" value="" required>
             </div>
              <div class="text-center"><button type="submit" name="send" id="send">Send Message</button></div>
              <!-- <div id="user-input" class="inline">
            <input type="text" id="submit"
            placeholder="Captcha code" /> -->
      </div>
 
    <!-- <div class="inline" onclick="generate()">
        <i class="fas fa-sync"></i>
    </div>
 
    <div id="image" class="inline" selectable="False">
    </div>
    <input type="submit" id="btn" onclick="printmsg()" /> -->
 
    <p id="key"></p>
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
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
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