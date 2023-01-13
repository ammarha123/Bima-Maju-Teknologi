<?php
$identifier = 5;
include("config.php");
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
        <div class="row">
          <div class="col-md-3">
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
                    <a href="#" class="nav-link">
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
                <h3 class="card-title">Inbox</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                    <tbody>
                      <?php
                      $query = "SELECT*FROM user_message order by read_status, created_time  ";
                      $query_run = mysqli_query($con, $query);
                      $check = mysqli_num_rows($query_run) > 0;
                      if ($check) {
                        while ($row = mysqli_fetch_assoc($query_run)) {

                      ?>
                          <tr>
                            <td>
                              <div class="btn-group">
                                <a href="delete_message.php?id=<?php echo $row['msg_id'] ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i></a>
                              </div>
                            </td>
                            <td class="mailbox-name"><a name="name" id="name" href="read.php?id=<?php echo $row['msg_id']; ?>"><?php echo $row['name'] ?></a></td>
                            <td class="mailbox-subject"><b>Subject</b> - <?php echo $row['subject'] ?>
                            </td>
                            <td class="mailbox-attachment"></td>
                            <td class="mailbox-date"><?php echo $row['created_time'] ?></td>

                            <td><?php if ($row['read_status'] == 0) { ?><a class="btn btn-dark btn-sm fs-5 disabled" href="#">New Message</a><?php } ?></td>

                          </tr>
                      <?php
                        }
                      } else {
                        echo "no data record found";
                      }
                      ?>
                    </tbody>
                  </table>
                  <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer p-0">
                <div class="mailbox-controls">
                  <!-- Check all button -->
                  <!-- /.btn-group -->
                  <button type="button" onClick="window.location.reload();" class="btn btn-default btn-sm ml-3"><i class="fas fa-sync-alt"></i></button>
                  <!-- <div class="float-right">
                    1-50/200
                    <div class="btn-group">
                      <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                      <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                    </div> -->
                    <!-- /.btn-group -->
                  <!-- </div> -->
                  <!-- /.float-right -->
                </div>
              </div>
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