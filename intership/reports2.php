<?php
   if(isset($_POST['priority']) && isset($_POST['status']) && isset($_POST['department']))
   {
        $priority=$_POST['priority'];
        $status=$_POST['status'];
        $dept=$_POST['department'];
        echo " ".$priority;
        echo $status;        
        echo $dept;
    }
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
  <link rel="stylesheet" type="text/css" href="style22.css">
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
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
          <li class="nav-item ">
            <a class="nav-link" href="collection.php">
              <p>Statistics for all Modules</p>
            </a>
          </li>
          <!-- your sidebar here -->
            <li class="nav-item active ">
            <a class="nav-link">
              <p>Priority wise Status modules</p>
            </a>
          </li>
          <li>
              <a class="nav-link" href="reports3.php">
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
                <a class="nav-link" href="#pablo">
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
          <!-- your content here -->
          <form action="collection2.php" method="_POST">
            <div class="select">
              <select name="priority" id="slt1">
                <option>Choose Priority</option>
                <option value="high">High</option>
                <option value="low">Low</option>
              </select>
              <select name="status" id="slt2">
                <option>Choose Status</option>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
              </select>
              <select name="department" id="slt3">
                <option>Choose Department</option>
                <option value="cse">CSE</option>
                <option value="ece">ECE</option>
                <option value="me">ME</option>   
              </select>
            <input type="submit" value="submit"/>
            <input type="reset" value="reset" href="reports2.php"/>
          </div>
        </form>  
    </div>
  </div>
</div>
</body>
</html>
