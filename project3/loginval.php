<?php
session_start();
error_reporting(0);
include_once('dbconnection.php');
if($_POST['submit'])
	{

		$ui=$_POST['userid'];
		$pass=$_POST['password'];

		$_SESSION['userpage_id']= $ui;

		if($ui!="" && $pass!="")
		{
			$query="SELECT * FROM user WHERE userid='$ui' AND userpassword='$pass'";
			$result=mysqli_query($conn, $query);
			//$ret=mysqli_num_rows($data);

		if(mysqli_num_rows($result) > 0)
			{
				header("location:user.php");
			} 
			else
			{
				echo '<script type="text/javascript">
				 alert("INVALID LOGIN")</script>';
				header("location:login.php");
			}
		}
		else
		{
			echo "all fields are required";
		}

	}
	if($_POST['adminlogin'])
	{

		$ui=$_POST['userid'];
		$pass=$_POST['password'];
		if($ui!="" && $pass!="")
		{
			$query="SELECT * FROM ADMINLOGIN WHERE adminid='$ui' AND adminpassword='$pass'";
			$data=mysqli_query($con,$query);
			$ret=mysqli_num_rows($data);
			if($ret>0)
			{
				header("location:table.php");
			} 
			else
			{
				echo '<script type="text/javascript"> alert("INVALID LOGIN")</script>';
				header("location:login.php");
			}
		}
		else
		{
			echo "all fields are required";
		}

	}
?>