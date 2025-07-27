<?php 
    include "header.php";

    if(isset($_REQUEST['id']))
	{
		$i = $_REQUEST['id'];
		// echo $i;
		mysqli_query($cn,"delete from users where uid = $i") or die ("delete error".mysqli_error($cn));
	}
      
    echo "<table border=3 style='margin:150px 0 0 400px; border-collapse: collapse;'>";

    echo "<tr style='background-color:black; color:white;'>
            <th style='padding: 15px 30px;'>Uid</th>
            <th style='padding: 15px 30px;'>UName</th>
            <th style='padding: 15px 30px;'>Uemail</th>
            <th style='padding: 15px 30px;'>Upass</th>
            <th style='padding: 15px 30px;'>Ucontact</th>
            <th style='padding: 15px 30px;'>Delete</th>
           
          </tr>";
    
    $rel = mysqli_query($cn, "select * from users") or die("select error".mysqli_error($cn));
    while($rec = mysqli_fetch_array($rel))
    {
        echo "<tr>";
        echo "<td style='padding: 15px 30px;'>".$rec['uid']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['uname']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['uemail']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['upass']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['ucontact']."</td>";
        echo "<td style='padding: 15px 30px;'>
                <a href='users.php?id=".$rec['uid']."' style='text-decoration: none; color: red;'>Delete</a>
              </td>";
        echo "</tr>";
        
    }
    echo "</table>";
?>