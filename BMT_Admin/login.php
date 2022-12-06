<?php 
  include("config.php");
  error_reporting(0);
 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $u = $_POST['email'];
    $p = ($_POST['password']);
    $captcha = $_POST["captcha"];
    $confirmcaptcha = $_POST["confirmcaptcha"];
    $qCek = mysqli_query($con, "SELECT * FROM adminprofile WHERE email='$u' AND password='$p'");
    if($captcha != $confirmcaptcha){
      echo
      "<script> alert('Incorrect Captcha'); </script>";
    }
    else{
    if (mysqli_num_rows($qCek) > 0) {
      
        $d = mysqli_fetch_array($qCek);
        session_start();
        $_SESSION['login'] = 'OK';
        $_SESSION['email'] = $d['email'];
        $_SESSION['name'] = $d['name'];
        $_SESSION['staff_id'] = $d['staff_id'];
        $_SESSION['level'] = $d['level'];
        header('Location:index.php');
    } else {
      echo "<script>alert('Username/Password incorrect!')</script>";
      echo "<script>location.href='login.php'</script>";
    }
  }
}
//   $s = "select * from adminprofile where email = '$email' && password = '".($password)."'";

//   $result = mysqli_query($con, $s);
//   $rows=mysqli_fetch_assoc($result);
//   $name=$rows["name"];
//   $staff_id=$rows["staff_id"];
//   $level=$rows["level"];
//   $num = mysqli_num_rows($result);
  
//   if (isset($email) && isset($password)) {
//     if($captcha != $confirmcaptcha){
//       echo
//       "<script> alert('Incorrect Captcha'); </script>";
//     }
//     else{
//     if ($num==1)
//     {
//       $_SESSION['email'] = $_POST['email'];
//       $_SESSION['name'] = $name;
//       $_SESSION['staff_id'] = $staff_id;
//       $_SESSION['level'] = $level;
//       header('Location:index.php'); 
//     }
//     else {
//       echo "<script>alert('Username/Password incorrect!')</script>";
//       echo "<script>location.href='login.php'</script>";
     
//     }
//   }
// }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bmt_admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../bmt_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../bmt_admin/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
     input.captcha{
      pointer-events: none;
      letter-spacing: 12px;
      text-decoration: dotted line-through;
      background-color: yellow;
      text-align: center;
    }
    .unselectable {
        -webkit-user-select: none;
        -webkit-touch-callout: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #cc0000;
      }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"name="password" id="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group text-center">
          <div class="unselectable">
              <input type="text" class ="captcha form-control" name="captcha" value="<?php echo substr(uniqid(), 6); ?>">
              </div>
              <input type="text" class="form-control" name="confirmcaptcha" placeholder="Input Captcha" value="" required>
             </div>
             
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit"name="login" id="login" class="btn btn-warning btn-block text-center">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Register</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
