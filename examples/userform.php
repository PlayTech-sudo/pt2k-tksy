<?php 
include('../assets/includes/dbconnection.php');
session_start();
error_reporting(0);
$ui=$_SESSION["userloginid"];
echo $ui;


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
<?php
require "../templets/usersidebar.html";
require "../templets/usernavigation.html";


?>
<div class="content">
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
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">User Profile</h4>
                  <p class="card-category"> Student Details</p>
                </div>
                <div class="card-body">
                  <form action="userform_db.php" method="POST">
                    <?php 
                          //include('../assets/includes/dbconnection.php');

                          $query="SELECT * FROM user WHERE userid='$ui'";
                          $data=mysqli_query($con,$query);
                          ?>
                      <?php while($result=mysqli_fetch_assoc($data)): ?>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name</label>
                          <input type="text" class="form-control" name="user_firstname" disabled="" value="<?=$result['firstname'];?>">
                        </div>
                        <?php
                        $_SESSION["u_firstname"]=$result['firstname'];
                        ?>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control" name="user_lastname" disabled="" value="<?=$result['lastname'];?>">
                        </div>
                        <?php
                        $_SESSION["u_lastname"]=$result['lastname'];
                        ?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="email" class="form-control" name="user_email" disabled="" value="<?=$result['email'];?>">
                        </div>
                        <?php
                        $_SESSION["u_email"]=$result['email'];
                        ?>

                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile</label>
                          <input type="text" class="form-control" name="user_mobile" disabled="" value="<?=$result['mobile'];?>">
                        </div>
                        <?php
                        $_SESSION["mobile"]=$result['mobile'];
                        ?>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sex</label>
                          <input type="text" class="form-control" name="user_sex" disabled="" value="<?=$result['sex'];?>">
                        </div>
                        <?php
                        $_SESSION["sex"]=$result['sex'];
                        ?>
                      </div>
                    </div>
                   
                    

                    <div class="row">
                      
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Branch Code</label>
                          <input type="text" class="form-control"name="user_brcode" disabled="
                          " value="<?=$result['brcode'];?>">

                        </div>
                        <?php
                        $_SESSION["u_brcode"]=$result['brcode'];
                        ?>

                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category Code</label>
                          <input type="text" class="form-control" name="user_catcode" disabled="" value="<?=$result['catcode'];?>">
                        </div>
                        <?php
                        $_SESSION["u_catcode"]=$result['catcode'];
                        ?>
                      </div>
                       <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Card No</label>
                          <input type="text" class="form-control" name="user_cardno" disabled=""  value="<?=$result['cardno'];?>">
                        </div>
                        <?php
                        $_SESSION["u_cardno"]=$result['cardno'];
                        ?>
                      </div>
                       <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Borrower No</label>
                          <input type="text" class="form-control" name="user_borrower" disabled="" value="<?=$result['borrowerno'];?>" >
                        </div>
                        <?php
                        $_SESSION["u_borrowerno"]=$result['borrowerno'];
                        ?>
                      </div>
                    </div>

                    <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">
                              <select class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" name="user_priority"     aria-haspopup="true" aria-expanded="false">
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <option selected>Priority</option>
                                <option value="1">High</option>
                                <option value="2">Low</option>
                              </div>
                            </select>
                          </div>
                        </div>
                      </div>

                     

                      
                    
                             <style> 
              textarea {
                    width: 100%;
                    height: 150px;
                    padding: 30px 20px;
                      box-sizing: border-box;
                    border: 2px solid #ccc;
                      border-radius: 4px;
                     background-color: #f8f8f8;
                       font-size: 16px;
                        resize: none;
                    }
                  </style>


          <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Subject</label>
                          <input type="text" class="form-control" name="user_subject">
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row"><div class="col-md-12">
                      <div class="form-group">
                        <label>User Ticket</label>
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                          <textarea class="form-control" rows="5" name="user_ticket"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <button type="submit" name="submit" class="btn btn-success pull-right">Submit</button>
                  <div class="clearfix"></div>
                  <br>
                  <?php endwhile; ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

  
</body>
</html>