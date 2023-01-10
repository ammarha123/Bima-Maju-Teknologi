<?php
$identifier = 2;
include('config.php');
include("header-navbar.php");
include("page_sidebar.php");

if (isset($_POST['upload'])) {
  //getting the post values
  $ID = $_GET['id'];
  $image = $_FILES['image']['name'];
  // get the image extension
  $extension = substr($image, strlen($image) - 4, strlen($image));
  // allowed extensions
  $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
  // Validation for allowed extensions .in_array() function searches an array for a specific value.
  if (!in_array($extension, $allowed_extensions)) {
    echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
  } else {
    //rename the image file
    $imgnewfile = md5($imgfile) . time() . $extension;
    // Code for move image into directory
    move_uploaded_file($_FILES["image"]["tmp_name"], "../img/" . $imgnewfile);
    // Query for data insertion
    $query = mysqli_query($con, "update list_product SET image = '$imgnewfile' where id = '$ID'");
    if ($query) {
      echo "<script>alert('Post Edited');</script>";
      echo "<script type='text/javascript'> document.location ='list_product.php'; </script>";
    } else {
      echo "Error creating table: " . mysqli_error($con);
    }
  }
}
$ID = $_GET['id'];
$ret = mysqli_query($con, "select * from list_product where id = '$ID'");
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
                  <h1 class="m-0 text-dark">List of Product</h1>
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
                <h3>Edit Image of the Products</h3>
              </div>
              <div class="row">
                <div class="col-lg-3 ">
                  <div class="column">
                    <div class="card">
                      <div class="card-body">
                        <img class="product-image mx-auto d-block" style="width:240px; height:200px;" src="../img/<?php echo $row['image']; ?>">
                        <div class="mb-2 text-center">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 ">
                  <form method="post" enctype="multipart/form-data">
                  <div class="card p-3 mt-lg-3">
                      <label for="image">Image</label>
                      <div class="form-group">
                        <input type="file" name="filename" multiple required="true" accept=".jpg, .jpeg, .png">
                      </div>
                      <div class="mt-5">
                        <button type="submit" name="upload" class="btn btn-warning">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
                <a href="list_product.php" type="button" class="btn btn-block btn-info"><i class="fas fa-arrow-left"></i> Back to the List of Product<a>
              </div>
            </div>
          </div>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.4
          </div>
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