<?php

session_start();
if (!isset($_SESSION['email'])) {
  header('location:login.php');
} else if (isset($_SESSION['email'])) {
  include("config.php");

  error_reporting(0);
  if ($identifier == 0) {
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
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
      <!-- JQVMap -->
      <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
      <!-- summernote -->
      <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <script src="https://kit.fontawesome.com/e820b38ede.js" crossorigin="anonymous"></script>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">

      <aside class="main-sidebar sidebar-light-warning elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="mt-2 pb-0 pt-0 brand-link">
          <img src="img/logoBMT.png" style="width:60%; height:60%; margin-bottom:0px" class="mx-auto d-block" alt="AdminLTE Logo">
          <!-- <p class="fw-bold">PT. BIMA MAJU TEKNOLOGI<p> -->
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel d-flex pt-0 pb-0">
            <div class="info">
              <a>Logged in as:</a>
              <a class="d-block"><?= $_SESSION['level']; ?></a>
              <a class="d-block"><?= $_SESSION['name']; ?></a>
              <a class="d-block"><?php echo "Staff ID: " . $_SESSION['staff_id']; ?></a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-tv"></i>
                  <p>
                    BMT Products
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="list_main_product.php" class="nav-link">
                      <i class="fa-solid fa-plus nav-icon"></i>
                      <p>Main Products Display</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="list_product.php" class="nav-link">
                      <i class="fa-solid fa-plus nav-icon"></i>
                      <p>List of Product</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa-solid fa-box"></i>
                  <p>
                    BMT Services
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="list_main_service.php" class="nav-link">
                      <i class="fa-solid fa-plus nav-icon"></i>
                      <p>Main Services Display</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="list_service.php" class="nav-link">
                      <i class="fa-solid fa-plus nav-icon"></i>
                      <p>List of Services</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="mailbox.php" class="nav-link">
                  <i class="nav-icon fa-solid fa-inbox"></i>
                  <p>
                    Mailbox
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="company_profile.php" class="nav-link">
                  <i class="nav-icon fa-solid fa-building"></i>
                  <p>
                    Company Profile
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin_profile.php" class="nav-link">
                  <i class="nav-icon fa-solid fa-user-tie"></i>
                  <p>
                    Admin Profile
                  </p>
                </a>
              </li>
              <?php if ($_SESSION['level'] == 'Admin') { ?>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-tv"></i>
                    <p>
                      Admin Panel
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="register.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Add User</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="user_list.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of User</p>
                      </a>
                    </li>
                  </ul>
                </li>
              <?php } ?>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>
    <?php } else {
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
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <script src="https://kit.fontawesome.com/e820b38ede.js" crossorigin="anonymous"></script>
      </head>

      <body class="hold-transition sidebar-mini layout-fixed">

        <aside class="main-sidebar sidebar-light-warning elevation-4">
          <!-- Brand Logo -->
          <a href="index.php" class="mt-2 pb-0 pt-0 brand-link">
            <img src="img/logoBMT.png" class="mx-auto d-block" style="width:60%; height:60%; margin-bottom:0px" alt="AdminLTE Logo">
            <!-- <p class="fw-bold">PT. BIMA MAJU TEKNOLOGI<p> -->
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel d-flex pt-0 pb-0">
              <div class="info">
                <a>Logged in as:</a>
                <a class="d-block"><?= $_SESSION['level']; ?></a>
                <a class="d-block"><?php echo $_SESSION['name']; ?></a>
                <a class="d-block"><?php echo "Staff ID: " . $_SESSION['staff_id']; ?></a>
              </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <?php if ($identifier == 1) { ?>
                  <li class="nav-item">
                    <a href="index.php" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        BMT Products
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link active">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Main Products Display</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="list_product.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of Product</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-box"></i>
                      <p>
                        BMT Services
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="list_main_service.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Main Services Display</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="list_service.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of Services</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="mailbox.php" class="nav-link">
                      <i class="nav-icon fa-solid fa-inbox"></i>
                      <p>
                        Mailbox
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="company_profile.php" class="nav-link">
                      <i class="nav-icon fa-solid fa-building"></i>
                      <p>
                        Company Profile
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="admin_profile.php" class="nav-link">
                      <i class="nav-icon fa-solid fa-user-tie"></i>
                      <p>
                        Admin Profile
                      </p>
                    </a>
                  </li>
                  <?php if ($_SESSION['level'] == 'Admin') { ?>
                    <li class="nav-item has-treeview">
                      <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-tv"></i>
                        <p>
                          Admin Panel
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="register.php" class="nav-link">
                            <i class="fa-solid fa-plus nav-icon"></i>
                            <p>Add User</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="user_list.php" class="nav-link">
                            <i class="fa-solid fa-plus nav-icon"></i>
                            <p>List of User</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  <?php } ?>
              </ul>
            <?php }
                if ($identifier == 2) { ?>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview menu-open">
                  <a href="index.php" class="nav-link active">
                    <i class="nav-icon fa-solid fa-tv"></i>
                    <p>
                      BMT Products
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Products Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link active">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Product</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-box"></i>
                    <p>
                      BMT Services
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Services Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Services</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="mailbox.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-inbox"></i>
                    <p>
                      Mailbox
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="company_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-building"></i>
                    <p>
                      Company Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-user-tie"></i>
                    <p>
                      Admin Profile
                    </p>
                  </a>
                </li>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        Admin Panel
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="register.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Add User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="user_list.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of User</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul> <?php }
                  if ($identifier == 3) { ?>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-tv"></i>
                    <p>
                      BMT Products
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Products Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_product.php" class="nav-link ">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Product</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fa-solid fa-box"></i>
                    <p>
                      BMT Services
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="#" class="nav-link active">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Services Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Services</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="mailbox.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-inbox"></i>
                    <p>
                      Mailbox
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="company_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-building"></i>
                    <p>
                      Company Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-user-tie"></i>
                    <p>
                      Admin Profile
                    </p>
                  </a>
                </li>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        Admin Panel
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="register.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Add User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="user_list.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of User</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul> <?php }
                  if ($identifier == 4) { ?>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-tv"></i>
                    <p>
                      BMT Products
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Products Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Product</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fa-solid fa-box"></i>
                    <p>
                      BMT Services
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Services Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link active">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Services</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="mailbox.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-inbox"></i>
                    <p>
                      Mailbox
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="company_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-building"></i>
                    <p>
                      Company Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-user-tie"></i>
                    <p>
                      Admin Profile
                    </p>
                  </a>
                </li>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        Admin Panel
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="register.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Add User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="user_list.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of User</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul> <?php }
                  if ($identifier == 5) { ?>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-tv"></i>
                    <p>
                      BMT Products
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Products Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Product</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-box"></i>
                    <p>
                      BMT Services
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Services Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Services</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fa-solid fa-inbox"></i>
                    <p>
                      Mailbox
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="company_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-building"></i>
                    <p>
                      Company Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-user-tie"></i>
                    <p>
                      Admin Profile
                    </p>
                  </a>
                </li>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        Admin Panel
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="register.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Add User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="user_list.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of User</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul> <?php }
                  if ($identifier == 6) { ?>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-tv"></i>
                    <p>
                      BMT Products
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Products Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Product</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-box"></i>
                    <p>
                      BMT Services
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Services Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Services</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="mailbox.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-inbox"></i>
                    <p>
                      Mailbox
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fa-solid fa-building"></i>
                    <p>
                      Company Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-user-tie"></i>
                    <p>
                      Admin Profile
                    </p>
                  </a>
                </li>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        Admin Panel
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="register.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Add User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="user_list.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of User</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul> <?php }
                  if ($identifier == 7) { ?>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-tv"></i>
                    <p>
                      BMT Products
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Products Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Product</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-box"></i>
                    <p>
                      BMT Services
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Services Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Services</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="mailbox.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-inbox"></i>
                    <p>
                      Mailbox
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="company_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-building"></i>
                    <p>
                      Company Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="nav-icon fa-solid fa-user-tie"></i>
                    <p>
                      Admin Profile
                    </p>
                  </a>
                </li>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        Admin Panel
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="register.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Add User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="user_list.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of User</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              </ul>
            <?php }
                  if ($identifier == 8) { ?>
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
                </li>
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-tv"></i>
                    <p>
                      BMT Products
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Products Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_product.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Product</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fa-solid fa-box"></i>
                    <p>
                      BMT Services
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_main_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>Main Services Display</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="list_service.php" class="nav-link">
                        <i class="fa-solid fa-plus nav-icon"></i>
                        <p>List of Services</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="mailbox.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-inbox"></i>
                    <p>
                      Mailbox
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="company_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-building"></i>
                    <p>
                      Company Profile
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin_profile.php" class="nav-link">
                    <i class="nav-icon fa-solid fa-user-tie"></i>
                    <p>
                      Admin Profile
                    </p>
                  </a>
                </li>
                <?php if ($_SESSION['level'] == 'Admin') { ?>
                  <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        Admin Panel
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="register.php" class="nav-link active">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Add User</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="user_list.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of User</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                <?php } ?>
              <?php }
                  if ($identifier == 9) { ?>
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                    <a href="index.php" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                  </li>
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-tv"></i>
                      <p>
                        BMT Products
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="list_main_product.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Main Products Display</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="list_product.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of Product</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa-solid fa-box"></i>
                      <p>
                        BMT Services
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="list_main_service.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>Main Services Display</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="list_service.php" class="nav-link">
                          <i class="fa-solid fa-plus nav-icon"></i>
                          <p>List of Services</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="mailbox.php" class="nav-link">
                      <i class="nav-icon fa-solid fa-inbox"></i>
                      <p>
                        Mailbox
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="company_profile.php" class="nav-link">
                      <i class="nav-icon fa-solid fa-building"></i>
                      <p>
                        Company Profile
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="admin_profile.php" class="nav-link ">
                      <i class="nav-icon fa-solid fa-user-tie"></i>
                      <p>
                        Admin Profile
                      </p>
                    </a>
                  </li>
                  <?php if ($_SESSION['level'] == 'Admin') { ?>
                    <li class="nav-item has-treeview menu-open">
                      <a href="#" class="nav-link active">
                        <i class="nav-icon fa-solid fa-tv"></i>
                        <p>
                          Admin Panel
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>
                      <ul class="nav nav-treeview">
                        <li class="nav-item">
                          <a href="register.php" class="nav-link">
                            <i class="fa-solid fa-plus nav-icon"></i>
                            <p>Add User</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="user_list.php" class="nav-link active">
                            <i class="fa-solid fa-plus nav-icon"></i>
                            <p>List of User</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                  <?php } ?>
                </ul>
              </ul>


            <?php } ?>

            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
    <?php }
} ?>