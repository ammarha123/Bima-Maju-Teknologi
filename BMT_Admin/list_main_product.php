<?php
include("config.php");
$identifier = 1;
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
  <script src="https://kit.fontawesome.com/e820b38ede.js" crossorigin="anonymous"></script>
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
              <h1 class="m-0 text-dark">Main Product Display</h1>
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
            <h3>Current Main Products</h3>
          </div>
          <div class="row">

            <?php
            $query = "SELECT*FROM main_product";
            $query_run = mysqli_query($con, $query);
            $check = mysqli_num_rows($query_run) > 0;
            if ($check) {
              while ($row = mysqli_fetch_assoc($query_run)) {

            ?>
                <div class="col-lg-3 col-6">
                  <div class="card">
                    <div class="card-body">
                      <img class="product-image mx-auto d-block" style="width:240px; height:200px; position:relative;" src="../img/<?php echo $row['filename']; ?>">
                      <br>
                      <h4 class="mt-3" style="text-align: center;"><?php echo $row['title'] ?></h4>
                    </div>
                  </div>
                </div>
            <?php
              }
            } else {
              echo "no data record found";
            }
            ?>
            <a href="edit_main_product.php" type="button" class="btn btn-block btn-info">Edit the Main Product Display <i class="fas fa-arrow-right"></i><a>
          </div>
        </div>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer bg-warning">
      <strong>Copyright &copy; PT. Bima Maju Teknologi.</strong>
      All rights reserved.
    </footer> 
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
  <script src="dist/js/main.js"></script>
</body>

</html>