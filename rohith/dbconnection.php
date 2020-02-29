<?php

$hostname="localhost";
$user_name="root";
$password="";
$db="ticket";
$conn = mysqli_connect($hostname, $user_name, $password, $db);
if(!$conn)
{
echo 'not connected';
}

?>




 