<?php

session_start();
error_reporting(0);

include('dbconnection.php');
$uid= $_GET['delrole'];
$_SESSION["userid"]=$uid;
?>
<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
<?php
	require "../templets/dissidebar.html";
	require "../templets/navigation.html";
	?>
	
	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Response</h4>
                  <p></p>
                  <!--<p class="card-category"> Here is a subtitle for this table</p>-->
                </div>
                                <div class="card-body">
                                    <?php 
                                    include('dbconnection.php');
                                    $query="SELECT * FROM user WHERE userid='$uid'";
                                    $data=mysqli_query($con,$query);
                                    ?>
                                    <?php while($result=mysqli_fetch_assoc($data)): ?>
                                    
                                            <form class="" action="discriptiondb.php" method="POST">
                                                <div class="row">
                                                    <div class="col-md-5 pr-1">
                                                        <div class="form-group">
                                                            <label>User ID </label>
                                                            <input type="text" name="uid"  class="form-control"   placeholder="Company" value=<?=$result['userid'];?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 px-1">
                                                        <div class="form-group">
                                                            <label>Branch Code</label>
                                                            <input type="text" class="form-control"  placeholder="Username" value=<?=$result['brcode'];?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="form-group">
                                                            <label>Card No</label>
                                                            <input type="text" class="form-control" placeholder="card number"
                                                            value=<?=$result['cardno'];?>>
                                                            <!--<label for="exampleInputEmail1">Email address</label>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>Borrower No</label>
                                                            <input type="text" class="form-control" placeholder="borrower no" value=<?=$result['borrowerno'];?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Category Code</label>
                                                            <input type="text" class="form-control" placeholder="category code" value=<?=$result['catcode'];?>>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 pr-1">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" placeholder="Company" value=<?=$result['firstname'];?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pl-1">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name" value=<?=$result['lastname'];?>>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Subject</label>
                                                            <input type="text" class="form-control" placeholder="Subject" value=<?=$result['subject'];?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 pr-1">
                                                        <div class="form-group">
                                                            <label>Priority</label>
                                                            <input type="text" class="form-control" placeholder="HIGH/LOW" value=<?=$result['priority'];?>>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 pl-1">
                                                        <div class="dropdown">
                                                            <label>Status</label>
                                                                <select name="statusdrop" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" >

                                                                <?php
                                                                $query="SELECT status FROM status_list ";
                                                                $data=mysqli_query($con,$query);
                                                                echo "<option >--SELECT--</option>";
                                                                while($result1=mysqli_fetch_assoc($data))
                                                                {
                                                                    $row=$result1['status'];
                                                                    echo "<option value='$row'>$row</option>";
                                                                }
                                                                ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--<div class="row">
                                                    
                                                    <div class="col-md-4 px-1">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <div class="form-group">
                                                      <label>About Me</label>
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating"></label>
                                                        <textarea class="form-control" rows="5" ><?=$result['uticket'];?></textarea>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                    <?php endwhile; ?>
                                                <div class="row">
                                                  <div class="col-md-12">
                                                    <div class="form-group">
                                                      <label>Admin Reply</label>
                                                      <div class="form-group">
                                                        <label class="bmd-label-floating"></label>
                                                        <textarea class="form-control" rows="4" name="replyticket" ></textarea>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>

                                                <button type="submit" href="discriptiondb.php?userid=<?php echo $uid; ?>"  name="submit" class="btn btn-success btn-fill pull-right" >Send Reply</button>
                                                <div class="clearfix"></div>
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