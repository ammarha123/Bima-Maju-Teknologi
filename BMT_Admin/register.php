<?php 
include("config.php");
error_reporting(0);
session_start();
$identifier = 8;
include("page_sidebar.php");
include("header-navbar.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm_pass'];
$staff_id = $_POST['staff_id'];
$level = $_POST['level'];

$s = "select * from adminprofile where email = '$email'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if (isset($_POST["login"])) {

  if ($num == 1) {
    echo "<script>alert('Account already exist')</script>";
    
  }else {
    if($password === $confirm_pass){
      $hash_password = hash("sha256", $password);
      $reg = "insert into adminprofile (name, email, password, staff_id, level) values ('$name', '$email','$hash_password', '$staff_id', '$level')";
      mysqli_query($con, $reg);
      echo "<script>alert('Registration Successful')</script>";
      echo "<script>location.href='register.php'</script>";
  
    }else{
      echo "<script>alert('Please check your password again.')</script>";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
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
            <h1 class="m-0 text-dark">User Register</h1>
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
  <div class="register-box" style="margin-left:auto; margin-right:auto;">

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new user</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" id="name" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="Staff ID" class="form-control" name="staff_id" id="staff_id" placeholder="Staff ID" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
                        <label>User Type</label>
                        <select class="form-control" name="level" id="level">
                          <option>Admin</option>
                          <option>Operator</option>
                        </select>
                      </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-12 pl-5 pr-5 text-center">
            <button name="login" id="login" type="submit" class="btn btn-warning">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
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