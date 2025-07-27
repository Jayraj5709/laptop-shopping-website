<?php 
    include "header.php";
  

     //======================= old date fetch ==================//
     if(isset($_REQUEST['id']))
     {
        $i = $_REQUEST['id'];
        $rel = mysqli_query($cn,"select * from categories where cid=$i") or die ("select error".mysqli_error($cn));
        $rec = mysqli_fetch_array($rel);
       
     }

     //================= new data  updata ================//
     if(isset($_REQUEST['txt3']) && $_REQUEST['txt3']=='update')
     {
        $n=$_REQUEST['txt1'];
        $nid = $_REQUEST['oid'];
        mysqli_query($cn,"update categories set cname='$n'  where cid=$nid") or die ("update error".mysqli_error($cn));
     }

    
     //=============insert data ==================//
     if(isset($_REQUEST['txt3']) && $_REQUEST['txt3']=='insert')
     {
        $e=$_REQUEST['txt1'];
  
         mysqli_query($cn," insert into categories set cname='$e'")or die("Insert Error".mysqli_error($cn));
         echo "Data Inserted";
     }
   
?>


<br><br>
<div style="width: 500px; margin: 100px auto; background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

        <h2 style="text-align: center;">Category Form</h2>
        <form action="insertcategory.php" method="post" style="font-size:18px;">
            <input type="hidden" name="oid" value="<?php echo @$rec['cid']; ?>">
            
            <label for="txt1">Category Name:</label><br>
            <input type="text" id="txt1" name="txt1" value="<?php echo @$rec['cname']; ?>" required
                   style="width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><br>
            
            <input type="submit" name="txt3" value="<?php if(isset($_REQUEST['id'])) echo 'update'; else echo 'insert'; ?>"
                   style="width: 100%; background-color: #4CAF50; color: white; padding: 12px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
        </form>

    </div>
   
</body>
</html>

