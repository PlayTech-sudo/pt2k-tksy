<?php
session_start();
error_reporting(0);

include('../assets/includes/dbconnection.php');
$ui =$_SESSION["userloginid"];
$user_first=$_SESSION["u_firstname"];
$user_last=$_SESSION["u_lastname"];
$user_email=$_SESSION["u_email"];
$user_mobile=$_SESSION["mobile"];
$user_borrower=$_SESSION["u_borrowerno"];
$user_cardno=$_SESSION["u_cardno"];
$user_catcode=$_SESSION["u_catcode"];
$user_sex=$_SESSION["sex"];
$user_brcode=$_SESSION["u_brcode"];



echo $user_first;
if(isset($_POST['submit']))
    {
        
        
        //$user_first=$_POST['user_firstname'];
       // $user_last=$_POST['user_lastname'];
        //$user_email=$_POST['user_email'];
        ///$user_mobile=$_POST['user_mobile'];
         //$user_borrower=$_POST['user_borrower'];
         //$user_cardno=$_POST['user_cardno'];
         //$user_catcode=$_POST['user_catcode'];
        //$user_sex=$_POST['user_sex'];
        //$user_brcode=$_POST['user_brcode'];
        $user_priority=$_POST['user_priority'];
        $user_subject=$_POST['user_subject'];
        $user_ticket=$_POST['user_ticket'];

        

        if($ui!="" && $user_first!="" && $user_last!="" && $user_email!="" && $user_mobile!="" && $user_borrower!="" && $user_cardno!="" && $user_catcode!="" && $user_sex!="" && $user_brcode!="" && $user_priority!="" && $user_subject!="" && $user_ticket!="")
        {

            $query="INSERT INTO userticket (userid,borrowerno,firstname,lastname,cardno,brcode,catcode,uticket,priority,subject,status,reply)VALUES('".$ui."','".$user_borrower."','".$user_first."','".$user_last."','".$user_cardno."','".$user_brcode."','".$user_catcode."','".$user_ticket."','".$user_priority."','".$user_subject."','0','0')";
$data=mysqli_query($con,$query); if($data) { header("location:login.php"); }
else { echo '<script type="text/javascript"> alert("problem while inserting
data into database")</script>'; } } else { echo '<script
type="text/javascript"> alert("some fields are empty")</script>'; } } ?>