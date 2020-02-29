<?php

include('dbconnection.php');
session_start();  // remember add this in all your web-pages

$lastname = '';
$email = '';
$firstname = '';  // these are global scope declarations.
$uid = $_SESSION['uid'];

$sql = "SELECT firstname, lastname, email FROM users where userid='".$uid."'";

if(mysqli_connect_errno())
{
	echo'There exits an error in the connection';
	exit();
}
else  // if the connection is successful then we move ahead.
{
	$result = mysqli_query($conn, $sql);  // we are making a query
	$row_count = mysqli_num_rows($result);
	if($row_count > 0)
	{
		while($row = mysqli_fetch_row($result)) // we are fetching the result row by row, which is stored in the $result variable.
		{
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$email = $row['email'];  
			echo($firstname);
			// echo($result);
		}
	}
	// mysqli_free_result($result);  // this is to clear the fetched result.
}
mysqli_close($conn); //connection closed here.


?>
