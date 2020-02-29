<?php
session_start();
error_reporting(0);
include('../assets/includes/dbconnection.php');
if($_POST['submit'])
	{

		$ui=$_POST['userid'];
		$pass=$_POST['password'];
		$_SESSION["userloginid"]=$_POST['userid'];
		if($ui!="" && $pass!="")
		{
			$query="SELECT * FROM USER WHERE userid='$ui' AND userpassword='$pass'";
			$data=mysqli_query($con,$query);
			$ret=mysqli_num_rows($data);
			if($ret>0)
			{
				header("location:userform.php");
			} 
			else
			{
				echo '<script type="text/javascript"> alert("INVALID LOGIN")</script>';
				//header("location:login.php");
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
				//header("location:login.php");
			}
		}
		else
		{
			echo "all fields are required";
		}

	}
?>