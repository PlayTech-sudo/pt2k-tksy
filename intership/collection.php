<?php
include 'reports.php';
require_once 'connection/config.php';
?>
<!DOCTYPE html>
<html>
<body>
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
        $sql="SELECT * FROM borrower;";
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

</body>
</html>