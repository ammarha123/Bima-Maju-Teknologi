<?php
include('config.php');
$identifier = 4;
include('page_sidebar.php');
include("header-navbar.php");
if (isset($_POST['upload'])) {
  //getting the post values
  $ID = $_GET['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $query = "update list_service SET title='$title', description='$description', image = '$newImageName' where id = '$ID'";
  if ($query) {
    echo "<script>alert('Service Successfully Updated');</script>";
    echo "<script type='text/javascript'> document.location ='list_service.php'; </script>";
  } else {
    echo "Error Updating Service" . mysqli_error($con);
  }
}
$ID = $_GET['id'];
$ret = mysqli_query($con, "select * from list_service where id = '$ID'");
$cnt = 1;
$row = mysqli_num_rows($ret);
if ($row > 0) {
  while ($row = mysqli_fetch_array($ret)) {
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
                  <a href="javascript:history.back()" style="text-decoration:none; font-size:30px;" class="text-dark text-bold"><i class="ion-android-arrow-back mx-2"></i> Cancel</a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right ">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active "></li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col">
                  <!-- general form elements -->
                  <div class="card card-warning">
                    <div class="card-header">
                      <h3 class="card-title">Edit Service</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="POST" enctype="multipart/form-data">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="Title">Title</label>
                          <input type="title" class="form-control" id="title" name="title" value="<?php echo $row['title']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="Description">Description</label>
                          <input type="description" class="form-control" id="Descrpition" name="description" value="<?php echo $row['description']; ?>">
                        </div>
                      </div>
                      <button name="upload" type="submit" class="btn btn-warning mx-auto d-block mb-3">Submit</button>
                  </div>
                  </form>
                </div>
                <!-- /.card -->

                <!-- Form Element sizes -->
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      </section>
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
    <?php
    $cnt = $cnt + 1;
  }
} else { ?>
    <tr>
      <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
    </tr>
  <?php } ?>
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