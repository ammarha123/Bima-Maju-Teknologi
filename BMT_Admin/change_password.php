<?php
$identifier = 7;
include("config.php");
include("page_sidebar.php");
$account = $_SESSION["email"];
include("header-navbar.php");
if (isset($_POST['submit'])) {

                
    $password  = $_POST['password'];
    $newpassword1 = $_POST['newPass1'];
    $newpassword2 = $_POST['newPass2'];
    
    $query4 = "SELECT password FROM adminprofile WHERE email = '$account'";
    $result2 = mysqli_query($con, $query4);
    $data  = mysqli_fetch_array($result2);
    
    if ($data['password'] == ($password))
    {
       
        if ($newpassword1 == $newpassword2)
        {
            $newencryptedpassword = ($newpassword1);
             
            $query5 = "UPDATE adminprofile SET password = '$newencryptedpassword' WHERE email = '$account' ";
            $result3 = mysqli_query($con, $query5);
            
            if ($result3) echo "<script>alert('Password Changed')</script>";
            echo "<script type='text/javascript'> document.location ='admin_profile.php'; </script>";
        }
        else echo "<script>alert('New Password does not matched')</script>";
    }
    else echo "<script>alert('Current Password is Incorrect')</script>";
    }
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
            <h1 class="m-0 text-dark">Admin Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
             
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
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST">
                <div class="card-body">
                <?php
                $result1 = mysqli_query($con, "select * from adminprofile where email = '$account' ");
                $num1 = mysqli_num_rows($result1);

                if ($num1 == 1) {
                    while ($account1 = mysqli_fetch_array($result1)) {
                ?>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Old Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">New Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="newPass1" name="newPass1" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="newPass2" name="newPass2" required>
                    </div>
                  </div>
                  <?php
                    }
                }
                ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-info">Submit</button> 
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
</div>
          <!-- /.col -->
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
