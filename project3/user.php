<!DOCTYPE html>
<!-- saved from url=(0037)http://localhost/al/project/user.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <link rel="apple-touch-icon" sizes="76x76" href="http://localhost/al/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="http://localhost/al/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>
    User form
  </title>
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="./User form_files/css">
  <link rel="stylesheet" href="./User form_files/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./User form_files/material-dashboard.css" rel="stylesheet">
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./User form_files/demo.css" rel="stylesheet">
</head>

<body class=""> 
<?php

include('dbconnection.php');
session_start();  // remember add this in all your web-pages

$lastname = '';
$email = '';
$firstname = '';  // these are global scope declarations.
$uid = $_SESSION['userpage_id'];

$sql = "SELECT firstname, lastname, email ,mobile,sex FROM user where userid='".$uid."'";

if(mysqli_connect_errno())  
{
  echo'There exits an error in the connection';
  exit();  
}
else  // if the connection is successful then we move ahead.
{
  $result = mysqli_query($conn, $sql);  // we are making a query
  $row_count = mysqli_num_rows($result);  
  if($row_count > 0)
  {
    while($row = mysqli_fetch_row($result)) // we are fetching the result row by row, which is stored in the $result variable.
    {
      $firstname = $row[0];
      $lastname = $row[1];
      $email =  $row[2];
      $mobile=  $row [3];
      $sex =$row[4];
    }
  }
  

  // mysqli_free_result($result);  // this is to clear the fetched result.
}
mysqli_close($conn); //connection closed here.


?>

  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag 
    -->
      <div class="logo">   
        <a href="#" class="simple-text logo-normal">
          User Portal
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="http://localhost/al/project3/user.php"> 
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a> 
          </li>
          <li class="nav-item active ">
            <a class="nav-link" href="http://localhost/al/project3/user.php"> 
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
           <li >
            <a class="nav-link" href="http://localhost/al/project3/status.php"> 
              <i class="material-icons">person</i>
              <p>Status</p>
            </a>
          </li>
         
      </ul></div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="http://localhost/al/project/user.html#pablo">User Profile</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
               
                
                  <div class="ripple-container"></div>
                   
                   <div class="nav-item">
                        <a class="nav-link" href="login.php">
                        <i class="material-icons">logout</i> Logout
                        </a>
                  </div>
                
              </div>
            </form>
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">User Profile</h4>
                  <p class="card-category"> Student Details</p>
                </div>
                <div class="card-body">
                  <form>
                  	 <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name --></label>
                          <?php echo($firstname); ?>
                        </div>

                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name --></label>
                          <?php echo($lastname); ?>
                        </div>
                      </div>
                    </div>

                  <!--    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department</label>
                          <label> <?php echo('universal'); ?> </label>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">USN</label>
                          <?php echo('hello boy'); ?>
                        </div>
                      </div>


                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">email</label>
                          <?php echo($email)?>
                        </div>
                      </div>     
                    </div>           
                   
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <label> <?php ?> </label>
                        </div>
                      </div>
                    </div>          -->
                      
                       <br>
                      
                       <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email --> </label>
                          <?php echo($email)?>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile -->  </label>
                         <?php echo($mobile)?>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Sex -->   </label>
                          <?php echo($sex)?>
                        </div>
                      </div>
                    </div>
                   
                    

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Branch  </label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Branch Code </label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Category Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                       <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Card No</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                       <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Borrower No</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>


                      <div class="row">
                       


                        <div class="col-md-4">
                          <div class="form-group">
                          <select class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           			
  									             <option selected="">Priority</option>
 								 	                 <option value="1">High</option>
  									               <option value="2">Low</option>

  								
							                     </select>

                                     </div>
                          </div>
                        </div>
                     

                      
                    <br>
                    <br>
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


                form {
                  font-size: 16px;
                  font-style: italic;
                }

									</style>
                }

					<textarea>Add Subject...</textarea>
					<br>
					<br>
					<br>
					 <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                    <br>
                  
                </div></form>
	              </div>
            </div>
          
     
    </div>
  </div>
 
 



</div></div></div></div></body></html>