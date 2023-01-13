<?php
include("config.php");
$identifier = 3;
include('page_sidebar.php');
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
              <h1 class="m-0 text-dark">Main Service Display</h1>
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
      <div class=container>
        <div class="mt-2">
          <div class="section-title">
            <h3>Current Main Services</h3>
          </div>
          <div class="row">

            <?php
            $query = "SELECT*FROM main_service";
            $query_run = mysqli_query($con, $query);
            $check = mysqli_num_rows($query_run) > 0;
            if ($check) {
              while ($row = mysqli_fetch_assoc($query_run)) {

            ?>
                <div class="col-lg-4 col-12">
                  <div class="card">
                    <div class="card-body">
                      <img class="product-image mx-auto d-block" style="width:340px; height:250px;" src="../img/<?php echo $row['filename']; ?>">
                    </div>
                    <div class="mb-2 text-center">
                      <a href="change_image_service.php?id=<?php echo $row['id']; ?>" class="btn btn-warning rounded-pill"><i class="ion ion-android-sync"></i> Change Image</a>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "no data record found";
            }
            ?>
          </div>
        </div>
        <div class="row">
              <div class="col-lg-12 col-6">
              <a href="list_main_service.php" type="button" class="btn btn-warning w-100 mb-lg-3"><i class="fas fa-arrow-left"></i> Back to List Main Product<a>
              </div>
              <div class="col-lg-12 col-6">
                <a href="edit_main_service.php" type="button" class="btn btn-info w-100">Review User Page <i class="fas fa-arrow-right"></i><a></a>
              </div>
            </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer bg-warning">
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