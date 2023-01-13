<?php
error_reporting(0);
$identifier = 6;
include("config.php");
include("page_sidebar.php");
include("header-navbar.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PT. BMT | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Company Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active"></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container" data-aos="fade-up">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">PT. Bima Maju Teknologi Profile</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-5">
              <div class="row">

                <br>
                <?php
                $query = "SELECT*FROM company_profile";
                $query_run = mysqli_query($con, $query);
                $check = mysqli_num_rows($query_run) > 0;
                if ($check) {
                  while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                      <br><br>
                      <img src="img/<?php echo $row['image']; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                      <h3>We are BMT</h3>
                      <p>
                        <?php echo $row['introduction'] ?>
                      </p>
                      <h3>Our Vision</h3>
                      <p>
                        <?php echo $row['vision'] ?>
                      </p>
                      <h3>Our Mission</h3>
                      <p>
                        <?php echo $row['mission'] ?>
                      </p>
                    </div>
              </div>
            </div>
          </div>
          <a href="edit_company_profile.php?id=<?php echo $row['id'] ?>" class="btn bg-gradient-info btn-sm float-right">Edit Profile</a>
          <a href="edit_company_profile_image.php?id=<?php echo $row['id'] ?>" class="btn bg-gradient-info btn-sm float-right mr-2">Edit Image</a>

      <?php
                  }
                } else {
                  echo "no data record found";
                }
      ?>

        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer bg-warning" style="margin-top:60px;">
      <strong>Copyright &copy; PT. Bima Maju Teknologi.</strong>
      All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>

</html>