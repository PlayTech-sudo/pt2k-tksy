<?php
require_once 'config.php';
include 'header.php';
?>

<html>
<head>
<meta charset="utf-8" />
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

      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        </a>
      </div>
      <div class="sidebar-wrapper">
      	<p><center><span>Reports</span></center></p>
        <ul class="nav">
           <li>
            <a class="nav-link" href="">
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <p>Statistics for all Modules</p>
            </a>
          </li>
          <!-- your sidebar here -->
            <li class="nav-item">
            <a class="nav-link" href="reports2.php">
              <p>Priority Wise Status Modules</p>
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="reports3.php">
              <p>Statistical Reports</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link">

              <p>Widgets</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
     <div class="main-panel">
     <div class="content">
        <div class="container-fluid">
        	<p><h4>This ticketing system was developed by Playtech</h4></p>
        		<p>For more details Contact them</p>
        	</div>
        </div>
    </div>
</div>
</body>
</html>
