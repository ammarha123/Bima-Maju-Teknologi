<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">
                    <?php
              $sql = "SELECT * from user_message WHERE read_status = 0";
              if ($result = mysqli_query($con, $sql)) {
              // Return the number of rows in result set
              $rowcount = mysqli_num_rows($result);  
              // Display result
              printf( $rowcount);
              }?>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
              <span class="dropdown-item dropdown-header"><?php
              $sql = "SELECT * from user_message WHERE read_status = 0";
              if ($result = mysqli_query($con, $sql)) {
              // Return the number of rows in result set
              $rowcount = mysqli_num_rows( $result );  
              // Display result
              printf( $rowcount);
      }?> Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="mailbox.php" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> <?php
          $sql = "SELECT * from user_message WHERE read_status = 0";
          if ($result = mysqli_query($con, $sql)) {
          // Return the number of rows in result set
          $rowcount = mysqli_num_rows( $result );  
          // Display result
          printf( $rowcount);
      }?> new messages
              </a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          </ul>
        <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li> -->
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index.php" class="nav-link">Home</a>
          </li>
        </ul>
        
       
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
          <a href="logout.php" class="nav-link btn-danger" style="color: white;">Logout</a>
          </li>
        </ul>
      </nav>
</body>
</html>