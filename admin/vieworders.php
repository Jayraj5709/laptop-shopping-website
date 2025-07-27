<?php   
 include "header.php";  

?>

 <form style="  display: flex;  align-items: center;   justify-content: center;">
    <?php 
  

    if(isset($_REQUEST['id']))
	{
		$i = $_REQUEST['id'];
		// echo $i;
		mysqli_query($cn,"delete from orders where oid = $i") or die ("delete error".mysqli_error($cn));
	}
    
    echo "<table border=3 style='margin-top:150px; border-collapse: collapse;'>";

    echo "<tr style='background-color:black; color:white;'>
            <th style='padding: 15px 30px;'>OId</th>
            <th style='padding: 15px 30px;'>UID</th>
            <th style='padding: 15px 30px;'>SHIPPING</th>
            <th style='padding: 15px 30px;'>ADDRESS</th>
            <th style='padding: 15px 30px;'>CONTACT</th>
            <th style='padding: 15px 30px;'>PMODE</th>
            <th style='padding: 15px 30px;'>STATUSE</th>
            <th style='padding: 15px 30px;'>DELETE</th>
          </tr>";
    
    $rel = mysqli_query($cn, "select * from orders") or die("select error".mysqli_error($cn));
    while($rec = mysqli_fetch_array($rel))
    {
        echo "<tr>";
        echo "<td style='padding: 15px 30px;'>".$rec['oid']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['uid']."</td>";
        // echo "<td style='padding: 15px 30px;'>".$rec['pid']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['shiping']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['address']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['contact']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['pmode']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['ost']."</td>";
        echo "<td style='padding: 15px 30px;'>
                <a href='vieworders.php?id=".$rec['oid']."' style='text-decoration: none; color: red;'>Delete</a>
              </td>";
        // echo "<td style='padding: 15px 30px;'>
        //         <a href='insertcategory.php?id=".$rec['oid']."' style='text-decoration: none; color: green;'>Update</a>
        //       </td>";
        echo "</tr>";
        
    }
    
    
    echo "</table>";
    
?>
    </form>
   
   
</body>
</html>




   