<?php
include("config.php");

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
          <li><a class="nav-link scrollto active" href="product.php">Product</a></li>
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
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <!-- <h1>What Do You Waiting For?</h1>
      <h2>There are many intersting products that you can get</h2>
      <div class="d-flex">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Modal">
          Book Now
        </button> -->
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero --> 

  <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Book Now</h5>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <img src="assets/img/tick.gif" class="img-fluid rounded" alt="">
            <h1 style="text-align: center;"><i class="fa fa-phone-square" style="font-size:48px;color:orange"></i> Call Us</h1><br>
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

  <main id="main">

     <!-- ======= Services Section ======= -->
     <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Our Product</h3>
        </div>

    <div class="row">
    <h2 id="first" class="fw-bold">Videotron</h2>
        <?php
                $query = "SELECT*FROM list_product WHERE type='Videotron'";
                $query_run=mysqli_query($con,$query);
                $check = mysqli_num_rows($query_run)>0;
                if ($check) {
                    while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
				
            
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                 <a href="img/<?php echo $row['image']?>" class="portfolio-lightbox preview-link">
                  <img src="img/<?php echo $row['image']?>"class="img-fluid rounded mx-auto d-block" style="width:400px;height:300px;" alt="">
                </a>
                <h2></h2>
                <h4><a href=""><?php echo $row['title']?></a></h4>
              <p><?php echo $row['description']?></p>
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

          <h2 id="Videotron" class="fw-bold">Videowall</h2>
          <?php
                $query = "SELECT*FROM list_product WHERE type='Videowall'";
                $query_run=mysqli_query($con,$query);
                $check = mysqli_num_rows($query_run)>0;
                if ($check) {
                    while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
				
            
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                 <a href="img/<?php echo $row['image']?>" class="portfolio-lightbox preview-link">
                  <img src="img/<?php echo $row['image']?>"class="img-fluid rounded mx-auto d-block" style="width:400px;height:300px;" alt="">
                </a>
                <h2></h2>
                <h4><a href=""><?php echo $row['title']?></a></h4>
              <p><?php echo $row['description']?></p>
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
          <h2 id="Videowall" class="fw-bold">Sound System</h2>
          
          <?php
                $query = "SELECT*FROM list_product WHERE type='Sound System'";
                $query_run=mysqli_query($con,$query);
                $check = mysqli_num_rows($query_run)>0;
                if ($check) {
                    while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
				
            
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                 <a href="img/<?php echo $row['image']?>" class="portfolio-lightbox preview-link">
                  <img src="img/<?php echo $row['image']?>"class="img-fluid rounded mx-auto d-block" style="width:400px;height:300px;" alt="">
                </a>
                <h2></h2>
                <h4><a href=""><?php echo $row['title']?></a></h4>
              <p><?php echo $row['description']?></p>
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
          
          <h2 id="Soundsystem" class="fw-bold fw-center">Projector</h2>
          <?php
                $query = "SELECT*FROM list_product WHERE type='Projector'";
                $query_run=mysqli_query($con,$query);
                $check = mysqli_num_rows($query_run)>0;
                if ($check) {
                    while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                 <a href="img/<?php echo $row['image']?>" class="portfolio-lightbox preview-link">
                  <img src="img/<?php echo $row['image']?>"class="img-fluid rounded mx-auto d-block" style="width:400px;height:300px;" alt="">
                </a>
                <h2></h2>
                <h4><a href=""><?php echo $row['title']?></a></h4>
              <p><?php echo $row['description']?></p>
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
          <h2 id="Projector"></h2>
        </div>

      </div>
    </section><!-- End Services Section -->

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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>