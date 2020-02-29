<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>



</head>
<body>
<?php
  require "../templets/report1.html";
  require "../templets/navigation.html";
  //require "../templets/filtertable.php";

?>
  <div class="content">
        <div class="container-fluid">
          <div class="row" >
            <div class="col-md-12" >
              <div class="card" >
                <div class="card-body">
                  <div class="table-responsive">
                    <form action="discription.php" method="POST">
                    <table id="user_data" class="display" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          User ID
                        </th>
                        <th>
                          User password
                        </th>
                        <th>
                          sex
                        </th>
                        <th>
                          firstname
                        </th>
                        <th>
                          lastname
                        </th>
                        <th>
                          email
                        </th>
                        <th>
                          mobile
                        </th>
                        <th>
                          Borrower no.
                        </th>
                        <th>
                          card no.
                        </th>
                         <th>
                          Branch code
                        </th>
                         <th>
                          category code
                        </th>
                        <th>
                          date of expiry
                        </th>
                      </thead>
                      <tbody>

                    <?php
                    include('../assets/includes/dbconnection.php');
                   $query="SELECT * FROM user ";
                 $data=mysqli_query($con,$query);?>
      
                   <?php while($result=mysqli_fetch_assoc($data)): ?>
                      
                        
                          <tr>
                              <td name='userid'><?=$result['userid'];?></td>
                              <td><?=$result['userpassword'];?></td>
                              
                              <td><?=$result['sex'];?></td>
                              <td><?=$result['firstname'];?></td>
                              <td><?=$result['lastname'];?></td>
                              <td><?=$result['email'];?></td>
                              <td><?=$result['mobile'];?></td>
                              <td><?=$result['borrowerno'];?></td>
                              <td><?=$result['cardno'];?></td>
                              <td><?=$result['brcode'];?></td>
                              <td><?=$result['catcode'];?></td>
                              <td><?=$result['dateexpiry'];?></td>  
                              <!--<input type="button" onclick="window.location.href = 'https://www.w3docs.com';" value="w3docs"/>-->
                          </tr>
                      
                    <?php endwhile; ?>
                    
                      
                    
                    </table>
                    </form>
                    </div>
                </div>
              </div>
            </div>
        </tbody>
    </table>
    <?php
  require "../templets/footer.html";
  ?>
</body>


</html> 
<script>
  $(document).ready( function () {
    $('#user_data').DataTable();

} );
</script>