<?php 
	include "config.php";
	//////////// Delete ??????????????????????

	if(isset($_REQUEST['id']))
	{
		$i = $_REQUEST['id'];
		// echo $i;
		mysqli_query($cn,"delete from student where sid = $i") or die ("delete error".mysqli_error($cn));
	}

	echo "<table border=1 cellpadding=10>";
	echo "<tr><th>id<th>name<th>contact<th>photo<th>delete<th>update</tr>";
    $rel=mysqli_query($cn,"select * from student") or die("select error".mysqli_error($cn));
	while($rec=mysqli_fetch_array($rel))
	{
		echo "<tr>";
		echo "<td>".$rec['sid']."</td>";
		echo "<td>".$rec['sname']."</td>";
		echo "<td>".$rec['scontact']."</td>";
		echo "<td> <img src='".$rec['sphoto']."' height=80 width=100></td>";
		echo "<td> <a href='f11.php?id=".$rec['sid']."'>Delete</a></td>";
		echo "<td><a href='f1.php?id=".$rec['sid']."'>Update</a></td>";
		echo "</tr>";

	};
	echo "</table>";
?><br><br>
<a href="f1.php">insert data</a>