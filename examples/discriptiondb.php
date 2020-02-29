<?php
session_start();
error_reporting(0);

include('../assets/includes/dbconnection.php');


    if(isset($_POST['submit']))
    {
        $uid= $_SESSION["userid"];
        $statusval=$_POST['statusdrop'];
        $adminreply=$_POST['replyticket'];
        if($statusval!="" && $adminreply!="")
        {

            $query="UPDATE USERTICKET SET status='$statusval', reply='$adminreply' WHERE userid='$uid'";
            $data=mysqli_query($con,$query);

            if($data)
            {
                header("location:table.php");
            }
            else
            {
                echo '<script type="text/javascript"> alert("problem while inserting data into database")</script>';
            }
        }
        else
        {
            echo '<script type="text/javascript"> alert("some fields are empty")</script>';
        }
    }
?>