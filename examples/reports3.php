<?php
require_once 'config.php';
?>
<!doctype html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style3.css">

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <center><h4>Reports</h4></center>
      </div>
      <div class="sidebar-wrapper">
        
        <ul class="nav">
           <li class="nav-item ">
            <a class="nav-link" href="table.php" >
              <i class="material-icons" >keyboard_arrow_left</i>
              <p><b>Back</b></p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="collection.php">
              <p>Statistics for all Modules</p>
            </a>
          </li>
          <!-- your sidebar here -->
            <li class="nav-item">
            <a class="nav-link" href="reports2.php">
              <p>Priority Wise Status Modules</p>
            </a>
          </li>
          <li class="nav-item active">
              <a class="nav-link">
              <p>Statistical Reports</p>
            </a>
          </li>
          <li>
            <a class="nav-link" href="collection4.php">
              <p>Widgets</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo"><h3>Welcome Admin</h3></a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="login.php">
                  <i class="material-icons">logout</i> Logout
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="column">
            <div class="card">
              <h5>High</h5>
              <h5>
                <?php
                $sql1="SELECT COUNT(userid) AS total FROM `userticket` WHERE priority='HIGH' AND status='pending';";
                  $result1=mysqli_query($conn,$sql1);
                  $values=mysqli_fetch_assoc($result1);
                  $num_rows=$values['total'];
                  echo $num_rows;
                  ?></h5>
            </div>
          </div>
      <div class="column">
         <div class="card">
              <h5>Pending</h5>
              <h5><?php
                $sql2="SELECT COUNT(userid) AS total FROM `userticket` WHERE priority='LOW' AND status='pending';";
                $result2=mysqli_query($conn,$sql2);
                $values=mysqli_fetch_assoc($result2);
                $num_rows=$values['total'];
                echo $num_rows;
                ?></h5>
          </div>
      </div>
      <div class="column">
            <div class="card">
              <h5>Completed</h5>
              <h5><?php
                $sql3="SELECT COUNT(userid) AS total FROM `userticket` WHERE status='completed';";
                $result3=mysqli_query($conn,$sql3);
                $values=mysqli_fetch_assoc($result3);
                $num_rows=$values['total'];
                echo $num_rows;
                
                ?></h5>
            </div>
      </div>
  </div>
</div>
</div>
</body>
</html>
