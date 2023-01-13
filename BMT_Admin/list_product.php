<?php
$identifier = 2;
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <style>
    .table-wrap {
      overflow-x: scroll;
    }

    .table {
      min-width: 1000px !important;
      width: 100%;
      background: #fff;
      -webkit-box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
      -moz-box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
      box-shadow: 0px 5px 12px -12px rgba(0, 0, 0, 0.29);
      text-align: center;
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
      <section class="content">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">PT. Bima Maju Teknologi Products</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          <div class="card-body table-wrap p-0">
            <table class="table">
              <thead>
                <tr>
                  <th style="width: 1%">
                    No.
                  </th>
                  <th style="width: 20%">
                    Title
                  </th>
                  <th style="width: 30%">
                    Description
                  </th>
                  <th>
                    Image
                  </th>
                  <th style="width: 8%" class="text-center">
                    Type
                  </th>
                  <th style="width: 22%">
                  </th>
                </tr>
              </thead>
            </table>
            <?php
            $counter = 1;

            $ret = mysqli_query($con, "select * from list_product ");
            $cnt = 1;
            $row = mysqli_num_rows($ret);
            if ($row > 0) {
              while ($row = mysqli_fetch_array($ret)) {

            ?>

                <table class="table table-striped projects">
                  <thead>
                    <tr>
                      <th style="width: 1%">
                      </th>
                      <th style="width: 20%">
                      </th>
                      <th style="width: 30%">
                      </th>
                      <th>
                      </th>
                      <th style="width: 8%" class="text-center">
                      </th>
                      <th style="width: 22%">
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <?php echo $counter++; ?>
                      </td>
                      <td>
                        <a>
                          <?php echo $row['title']; ?>
                        </a>
                        <br />
                      </td>
                      <td>
                        <?php echo $row['description']; ?>
                      </td>
                      <td class="project_progress">
                        <img class="product-image" style="width:250px; height:150px;" src="../img/<?php echo $row['image']; ?>">
                      </td>
                      <td class="project-state">
                        <a>
                          <?php echo $row['type']; ?>
                        </a>
                      </td>
                      <td class="project-actions text-right">
                        <div class="row">
                          <div class="col-12 mb-3">
                            <a class="btn btn-info btn-sm" href="editproduct.php?id=<?php echo $row['id']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                            </a>
                          </div>
                          <div class="col-12 mb-3">
                            <a class="btn btn-primary btn-sm" href="edit_image_product.php?id=<?php echo $row['id']; ?>">
                              <i class="nav-icon far fa-image">
                              </i>
                              Edit Image
                            </a>
                          </div>
                          <div class="col-12">
                            <a class="btn btn-danger btn-sm" href="delete_product.php?id=<?php echo $row['id']; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              <?php
                $cnt = $cnt + 1;
              }
            } else { ?>
              <tr>
                <th style="text-align:center; color:red;" colspan="6">No Record Found. Go Add Product</th>
              </tr>
            <?php } ?>
          </div>
          <!-- /.card-body -->
        </div>
        <a href="addproduct.php" class="btn bg-gradient-info btn-sm float-right col-md-12">Add Product</a>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer bg-warning" style="margin-top:80px;">
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