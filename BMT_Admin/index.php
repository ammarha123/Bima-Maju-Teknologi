<?php
if (!isset($_SESSION['login'])) {
  include("page_sidebar.php");
  include("config.php");
  include("header-navbar.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Highchart -->
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="js/highcharts.js" type="text/javascript"></script>
  <script src="js/exporting.js" type="text/javascript"></script>
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
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php

                      include("config.php");

                      // SQL query to display row count
                      // in building table
                      $sql = "SELECT * from main_product";

                      if ($result = mysqli_query($con, $sql)) {

                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);

                        // Display result
                        printf($rowcount);
                      }

                      // Close the connection
                      mysqli_close($con);

                      ?></h3>

                  <p>Main Product Display</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
                <a href="list_main_product.php" class="small-box-footer">More Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3> <?php

                        // localhost is localhost
                        // servername is root
                        // password is empty
                        // database name is database
                        include("config.php");

                        // SQL query to display row count
                        // in building table
                        $sql = "SELECT * from main_service";

                        if ($result = mysqli_query($con, $sql)) {

                          // Return the number of rows in result set
                          $rowcount = mysqli_num_rows($result);

                          // Display result
                          printf($rowcount);
                        }

                        // Close the connection
                        mysqli_close($con);

                        ?></h3>

                  <p>Main Service Display</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-box"></i>
                </div>
                <a href="list_main_service.php" class="small-box-footer">More Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php

                      // localhost is localhost
                      // servername is root
                      // password is empty
                      // database name is database
                      include("config.php");

                      // SQL query to display row count
                      // in building table
                      $sql = "SELECT * from list_product";

                      if ($result = mysqli_query($con, $sql)) {

                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);

                        // Display result
                        printf($rowcount);
                      }

                      // Close the connection
                      mysqli_close($con);

                      ?></h3>

                  <p>Products List</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-albums"></i>
                </div>
                <a href="list_product.php" class="small-box-footer">More Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php

                      // localhost is localhost
                      // servername is root
                      // password is empty
                      // database name is database
                      include("config.php");

                      // SQL query to display row count
                      // in building table
                      $sql = "SELECT * from list_service";

                      if ($result = mysqli_query($con, $sql)) {

                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows($result);

                        // Display result
                        printf($rowcount);
                      }

                      // Close the connection
                      mysqli_close($con);

                      ?></h3>

                  <p>Services List</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-photos"></i>
                </div>
                <a href="list_service.php" class="small-box-footer">More Details <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Highchart -->
              <div id="container" class="mb-5" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto">

              </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
              <div class="col">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3 style="font-size: 30px; text-align: center;">Check the Company Profile<sup style="font-size: 20px"></sup></h3>
                  </div>

                  <a href="company_profile.php" class="small-box-footer">More Details <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col">
                <!-- small box -->
                <div class="small-box badge-primary">
                  <div class="inner">
                    <h3 style="font-size: 30px; text-align: center;">Website Mail Box<sup style="font-size: 20px"></sup></h3>
                  </div>

                  <a href="mailbox.php" class="small-box-footer">More Details <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <div class="col">
                <!-- small box -->
                <div class="small-box badge-dark">
                  <div class="inner">
                    <h3 style="font-size: 30px; text-align: center;">Display the User Page<sup style="font-size: 20px"></sup></h3>
                  </div>

                  <a href="//localhost/BMT/" target="_blank"" class=" small-box-footer">More Details <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer bg-warning">
      <strong>Copyright &copy; PT. Bima Maju Teknologi.</strong>
      All rights reserved.
    </footer>
  </div>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  
</body>
</html>
<script>
  var chart1; // globally available
  $(document).ready(function() {
    chart1 = new Highcharts.Chart({
      chart: {
        renderTo: 'container',
        type: 'column'
      },
      title: {
        text: 'Jumlah Pengunjung Website Per-Bulan'
      },
      xAxis: {
        categories: ['Jan',
          'Feb',
          'Mar',
          'Apr',
          'May',
          'Jun',
          'Jul',
          'Aug',
          'Sep',
          'Oct',
          'Nov',
          'Dec'
        ]
      },
      yAxis: {
        title: {
          text: ''
        }
      },
      series: [
        <?php
        // file koneksi php
        $con = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($con, 'bmt');
        $data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        for ($i = 1; $i <= 12; $i++) {
          $sql = "SELECT COUNT(*) as total FROM log_user_visit WHERE MONTH(user_visit) = $i;";
          $query = mysqli_query($con, $sql);
          while ($row = $query->fetch_assoc()) {
            $data[$i - 1] = (int)$row['total'];
          }
        }
        ?> {
          name: 'Total Number of User Visit',
          data: <?php echo json_encode($data)?>
        },
      ]
    });
  });
</script>