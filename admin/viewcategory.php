<?php    include "header.php";  

?>

 <form style="  display: flex;  align-items: center;   justify-content: center;">
    <?php 
  

    if(isset($_REQUEST['id']))
	{
		$i = $_REQUEST['id'];
		// echo $i;
		mysqli_query($cn,"delete from categories where cid = $i") or die ("delete error".mysqli_error($cn));
	}
    
    echo "<table border=3 style='margin-top:150px; border-collapse: collapse;'>";

    echo "<tr style='background-color:black; color:white;'>
            <th style='padding: 15px 30px;'>CId</th>
            <th style='padding: 15px 30px;'>CName</th>
            <th style='padding: 15px 30px;'>Delete</th>
            <th style='padding: 15px 30px;'>Update</th>
          </tr>";
    
    $rel = mysqli_query($cn, "select * from categories") or die("select error".mysqli_error($cn));
    while($rec = mysqli_fetch_array($rel))
    {
        echo "<tr>";
        echo "<td style='padding: 15px 30px;'>".$rec['cid']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['cname']."</td>";
        echo "<td style='padding: 15px 30px;'>
                <a href='viewcategory.php?id=".$rec['cid']."' style='text-decoration: none; color: red;'>Delete</a>
              </td>";
        echo "<td style='padding: 15px 30px;'>
                <a href='insertcategory.php?id=".$rec['cid']."' style='text-decoration: none; color: green;'>Update</a>
              </td>";
        echo "</tr>";
        
    }
    
    
    echo "</table>";
    
?>
    </form>
   
   
</body>
</html>




   