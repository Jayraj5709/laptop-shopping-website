<?php    
include "header.php";  
// Make sure header.php includes DB connection
?>

<form style="display: flex; align-items: center; justify-content: center;">
<?php 
    if (isset($_GET['id'])) {
        $i = $_GET['id'];
        mysqli_query($cn, "DELETE FROM products WHERE pid = $i") or die ("Delete error: " . mysqli_error($cn));
    }

    echo "<table border=3 style='margin-top:50px; border-collapse: collapse;'>";

    echo "<tr style='background-color:black; color:white;'>
            <th style='padding: 15px 30px;'>PID</th>
            <th style='padding: 15px 30px;'>NAME</th>
            <th style='padding: 15px 30px;'>CID</th>
            <th style='padding: 15px 30px;'>PRICE</th>
            <th style='padding: 15px 30px;'>MRP</th>
            <th style='padding: 15px 30px;'>DESCRIPTION</th>
            <th style='padding: 15px 30px;'>PHOTO1</th>
            <th style='padding: 15px 30px;'>PHOTO2</th>
            <th style='padding: 15px 30px;'>DELETE</th>
            <th style='padding: 15px 30px;'>UPDATE</th>
          </tr>";

    $rel = mysqli_query($cn, "SELECT * FROM products") or die("Select error: " . mysqli_error($cn));
    while($rec = mysqli_fetch_array($rel)) {
        echo "<tr>";
        echo "<td style='padding: 15px 30px;'>".$rec['pid']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['pname']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['cid']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['pprice']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['pmrp']."</td>";
        echo "<td style='padding: 15px 30px;'>".$rec['pd']."</td>";
        echo "<td style='padding: 15px 30px;'><img src='".$rec['pphoto1']."' height=80  width=100></td>";
        echo "<td style='padding: 15px 30px;'><img src='".$rec['pphoto2']."' height=80  width=100></td>";
        echo "<td style='padding: 15px 30px;'>
                <a href='viewproduct.php?id=".$rec['pid']."'  style='text-decoration: none; color: red;'>Delete</a>
              </td>";
        echo "<td style='padding: 15px 30px;'>
                <a href='insertproduct.php?id=".$rec['pid']."' style='text-decoration: none; color: green;'>Update</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
?>
</form>
</body>
</html>
