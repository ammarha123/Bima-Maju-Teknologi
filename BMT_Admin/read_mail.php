<?php
error_reporting(0);
include("config.php");
$identifier = 5;
include("page_sidebar.php");
include("header-navbar.php");
$id = $_GET['id'];
$sql = "SELECT * FROM user_message where msg_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
//Databse Connection file
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
            <h1 class="m-0 text-dark">Mailbox</h1>
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
          <div class="col-md-3">
            <a href="mailbox.php" class="btn btn-warning btn-block mb-3">Back to Inbox</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item active">
                    <a href="mailbox.php" class="nav-link">
                      <i class="fas fa-inbox"></i> Inbox
                      <span class="badge bg-warning float-right">
                        <?php
                        $sql = "SELECT * from user_message";
                        if ($result = mysqli_query($con, $sql)) {
                          // Return the number of rows in result set
                          $rowcount = mysqli_num_rows($result);
                          // Display result
                          printf($rowcount);
                        } ?></span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
           
          </div>
          <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-warning card-outline">
            <div class="card-header">
              <h3 class="card-title">Read Mail</h3>
      
              <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5><?php echo $row['subject']; ?></h5>
                <h6>From: <?php echo $row['name']; ?>
                <span class="mailbox-read-time float-right"><?php echo $row['created_time']; ?></span><br><?php echo $row['email']; ?></h6>
            
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-read-message">
                <p><?php echo $row['message']; ?></p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            
            <!-- /.card-body -->
            <!-- /.card-footer -->
            <div class="card-footer">
            <a href="delete_message.php?id=<?php echo $row['msg_id']?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</a>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
        </div>  
        <!-- /.col -->
      </div>
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
