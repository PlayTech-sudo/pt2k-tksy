<?php              
include 'reports.php';
//include 'header.php';
require_once('connection/config.php');
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
	<div class="container">
		<div class="table-responsive">
    		<table>
				<thead>
					<tr>
					<th>User ID</th>
					<th>Password</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Sex</th>
					<th>Email</th>
					<th>Brcode</th>
					<th>catcode</th>
					<th>cardNo</th>
					<th>Borrowerno</th>
					<th>Title</th>
					<th>Mob</th>
					</tr>
				</thead>
				<tbody>
				
				<?php
				$sql="SELECT * FROM borrower ORDER BY userid DESC;";
				$result=mysqli_query($conn,$sql);
		
				while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr><td>".$row['userid']."</td>";
					echo "<td>".$row['passwd']."</td>";
					echo "<td>".$row['firstname']."</td>";
					echo "<td>".$row['lastname']."</td>";
					echo "<td>".$row['sex']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['brcode']."</td>";
					echo "<td>".$row['catcode']."</td>";
					echo "<td>".$row['cardno']."</td>";
					echo "<td>".$row['borrowerno']."</td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['mob']."</td>";
					echo "</tr>";
				}
				?>
			</tbody>
			</table>
		</div>
	</div>
</body>
</html>