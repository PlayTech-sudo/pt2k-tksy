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
			header("location:defination.php");		}
		if($data==0)
		{
            	
			echo "<script type='text/javascript'>showNotification('top','right','Entry Inserted', 'success');</script>";
		}
		
	}
	else
	{
		echo "all fields are required";
	}
}
?>