<?php
session_start();
error_reporting(0);
include('../assets/includes/dbconnection.php');
if(isset($_POST['submit']))
{
    $statusval=$_POST['status'];
    if($statusval!="")
    {
        $query="INSERT INTO `status_list`(`status_no`, `status`) VALUES (NULL,'$statusval')";
        $data=mysqli_query($con,$query);
        if ($data)
        {
            echo "<script type='text/javascript'>alert('succesfully inserted');</script>";

        }
        if($data==0)
        {
                
             echo "<script type='text/javascript'>alert('data already present');</script>";
        }
        
    }
    else
    {
        echo "<script type='text/javascript'>alert('status field is empty');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<?php
require "../templets/definitionsidebar.html";
require "../templets/navigation.html";
?>
<body>
	
  <div class="content">
        <div class="container-fluid">
             <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="card">
                        <div class="card-header card-header-success" >
                            <center><h4 class="card-title">Defination</h4></center>
                            <p></p>
                        </div>
                        <div class="card-body">
                            <form class=""  method="POST" >
                                <div class="row">
                                    <div class="col-md-5 pr-1">
                                        <div class="form-group">
                                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD STATUS </label>
                                            <input type="text" class="form-control" name="status" placeholder="" value="">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit"  name="submit" class="btn btn-success btn-fill pull-right" >Update Status</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    require "../templets/footer.html";
    ?>
</body>
</html>
