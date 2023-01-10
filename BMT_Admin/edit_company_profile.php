<?php
include('config.php');
$identifier = 6;
include("page_sidebar.php");
include("header-navbar.php");
if (isset($_POST['upload'])) {
    //getting the post values
    $ID = $_GET['id'];
    $introduction = $_POST['introduction'];
    $vision = $_POST['vision'];
    $mission = $_POST['mission']; 
    $query = "update company_profile SET introduction='$introduction', vision='$vision',  mission='$mission' where id = '$ID'";
        mysqli_query($con, $query);
        echo
        "
        <script>
          alert('Successfully Edited');
          document.location.href = 'company_profile.php';
        </script>
        ";
      }
                $ID = $_GET['id'];
                $ret = mysqli_query($con, "select * from company_profile where id = '$ID'");
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
  <style>
    textarea {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;

    width: 100%;
}
  </style>
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
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="introduction">Introduction</label>
                    <textarea id="introduction" name="introduction" rows="4"><?php echo $row['introduction'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="vision">Vision</label>
                    <textarea id="vision" name="vision" rows="4"><?php echo $row['vision'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="mission">Mission</label>
                    <br>
                    <textarea id="mission" name="mission" rows="4"><?php echo $row['mission'];?></textarea>
                  </div>
                 
                  <button name="upload" type="submit" class="btn btn-warning">Submit</button>
                    
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
