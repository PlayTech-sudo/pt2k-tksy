<?php
require_once 'config.php';
include 'header.php';
include 'reports2.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style22.css">
</head>
<body>
	<div class="table-responsive">
	<table>
		<tr>
		<th>User ID</th>
		<th>Borrower No</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Card no</th>
		<th>Brcode</th>
		<th>Catcode</th>
		<th>Uticket</th>
		<th>Priority</th>
		<th>Subject</th>
		<th>Status</th>
		<th>Department</th>
		</tr>
		<?php
		if(isset($_GET['priority']) && isset($_GET['status']) && isset($_GET['department']))
		{
		$priority=$_GET['priority'];
		$status=$_GET['status'];
		$dept=$_GET['department'];

		$sql="SELECT * FROM userticket WHERE priority='$priority' AND status='$status' AND dept='$dept';";
		$result=mysqli_query($conn,$sql);

		while($row=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$row['id']."</td>";
			echo "<td>".$row['borrowerno']."</td>";
			echo "<td>".$row['firstname']."</td>";
			echo "<td>".$row['lastname']."</td>";
			echo "<td>".$row['cardno']."</td>";
			echo "<td>".$row['brcode']."</td>";
			echo "<td>".$row['catcode']."</td>";
			echo "<td>".$row['uticket']."</td>";
			echo "<td>".$row['priority']."</td>";
			echo "<td>".$row['subject']."</td>";
			echo "<td>".$row['status']."</td>";
			echo "<td>".$row['dept']."</td>";
			echo "</tr>";
		}
		}
		else
		{
			echo "No Records Selected";
		}
		?>
	</table>
</div>
</body>
</html>