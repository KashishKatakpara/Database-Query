<?php
	include "connection.php";
	$sql="SELECT * FROM `query`";
	$result=mysqli_query($con,$sql);
	echo mysqli_num_rows($result);
	if(mysqli_num_rows($result)>0)
	{
		echo "<table border=3><tr>";
		echo "<th>First Name</th>";
		echo "<th>Middle Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Course</th>";
		echo "<th>Gender</th>";
		echo "<th>Phone No.</th>";
		echo "<th>Address</th>";
		echo "<th>E-mail</th>";
		echo "<th>Password</th>";
		echo "<th>Retype Password</th>";
		echo "<th>Delete</th>";
		echo "<th>Update</th>";
		echo "<tr>";
		while($rows=mysqli_fetch_assoc($result))
		{
			$idd= $rows['id'];
			echo "<tr>";
			echo "<td>".$rows['fnm']."</td>";
			echo "<td>".$rows['mnm']."</td>";
			echo "<td>".$rows['lnm']."</td>";
			echo "<td>".$rows['course']."</td>";
			echo "<td>".$rows['rd']."</td>";
			echo "<td>".$rows['phone']."</td>";
			echo "<td>".$rows['adr']."</td>";
			echo "<td>".$rows['email']."</td>";
			echo "<td>".$rows['pwd']."</td>";
			echo "<td>".$rows['pwdrpt']."</td>";
			echo "<td><a href='delete.php?id=<?php echo $idd; ?>'>Delete</a></td>";
			echo "<td><a href='update.php?id=<?php echo $idd; ?>'>Update</a></td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "0 result";
	}
?>