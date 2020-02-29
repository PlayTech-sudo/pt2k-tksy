<?php

$hostname="localhost";
$user_name="root";
$password="";
$db="user";
$conn = mysqli_connect($hostname, $user_name, $password, $db);
if(!$conn)
{
echo 'not connected';
}
else
{
	echo 'connection successfull';
}
?>




 