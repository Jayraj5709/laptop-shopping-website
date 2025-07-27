<?php 
    include "header.php";
  

     //======================= old date fetch ==================//
     if(isset($_REQUEST['id']))
     {
        $i = $_REQUEST['id'];
        $rel = mysqli_query($cn,"select * from products where pid=$i") or die ("select error".mysqli_error($cn));
        $rec = mysqli_fetch_array($rel);
     }

     //================= new data  updata ================//
     if(isset($_REQUEST['txt7']) && $_REQUEST['txt7']=='update')
     {
        $n=$_REQUEST['txt1'];
        $id=$_REQUEST['txt2'];
        $pr=$_REQUEST['txt3'];
        $mr=$_REQUEST['txt4'];
        $d=$_REQUEST['txt8'];
        $nid = $_REQUEST['oid'];
        $p1=$_REQUEST['oimg1'];
        $p2=$_REQUEST['oimg2'];

        if($_FILES['txt5']['name'] != ""){
              $p1='img/'.$_FILES['txt5']['name'];
              move_uploaded_file($_FILES['txt5']['tmp_name'],$p1);
        }
        if($_FILES['txt6']['name'] != ""){
              $p2='img/'.$_FILES['txt6']['name'];
              move_uploaded_file($_FILES['txt6']['tmp_name'],$p2);
        }

       //  $p1='img/'.$_FILES['txt5']['name'];
       //  move_uploaded_file($_FILES['txt5']['tmp_name'],$p1);
       //  $p2='img/'.$_FILES['txt6']['name'];
       //  move_uploaded_file($_FILES['txt6']['tmp_name'],$p2);

        mysqli_query($cn,"update products set pname='$n', cid='$id', pprice='$pr' , pmrp='$mr', pd='$d' , pphoto1='$p1' , pphoto2='$p2'  where pid=$nid") or die ("update error".mysqli_error($cn));
     }

    
     //=============insert data ==================//
     if(isset($_REQUEST['txt7']) && $_REQUEST['txt7']=='insert')
     {
        $n=$_REQUEST['txt1'];
        $id=$_REQUEST['txt2'];
        $pr=$_REQUEST['txt3'];
        $mr=$_REQUEST['txt4'];
        $d=$_REQUEST['txt8'];
        $p1='img/'.$_FILES['txt5']['name'];
        move_uploaded_file($_FILES['txt5']['tmp_name'],$p1);
        $p2='img/'.$_FILES['txt6']['name'];
        move_uploaded_file($_FILES['txt6']['tmp_name'],$p2);
    


         mysqli_query($cn," insert into products set pname='$n', cid='$id', pprice='$pr' , pmrp='$mr' , pd='$d' , pphoto1='$p1' , pphoto2='$p2' ")or die("Insert Error".mysqli_error($cn));
         echo "Data Inserted";
     }
   
?>


<br><br>
<div style="width: 500px; margin: 100px auto; background-color: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

        <h2 style="text-align: center;">Product Form</h2>
        <form action="insertproduct.php" method="post" style="font-size:18px;" enctype="multipart/form-data">
            <input type="hidden" name="oid" value="<?php echo @$rec['pid']; ?>">
            <input type="hidden" name="oimg1" value="<?php echo @$rec['pphoto1']; ?>">
            <input type="hidden" name="oimg2" value="<?php echo @$rec['pphoto2']; ?>">

            
            <input type="text" id="txt1" name="txt1" placeholder="Product Name" value="<?php echo @$rec['pname']; ?>" required
                   style="width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><br>

            <input type="text" id="txt2" name="txt2"  placeholder="category type" value="<?php echo @$rec['cid']; ?>" required
                   style="width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><br>

            <input type="text" id="txt3" name="txt3" placeholder="Price" value="<?php echo @$rec['pprice']; ?>" required
                   style="width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><br>

            <input type="text" id="txt4" name="txt4" placeholder="MRP" value="<?php echo @$rec['pmrp']; ?>" required
                   style="width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><br>

            <textarea id="w3review" name="txt8" rows="4" placeholder="discription" 
                   style="width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><?php echo @$rec['pd'] ?> </textarea>

            <input type="file" id="txt5" name="txt5" placeholder="Photo" value="<?php echo @$rec['pphoto1']; ?>" 
                   style="width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><br>

            <input type="file" id="txt6" name="txt6" placeholder="Photo" value="<?php echo @$rec['pphoto2']; ?>" 
                   style="width: 100%; padding: 10px; margin: 10px 0 20px 0; border: 1px solid #ccc; border-radius: 5px;"><br>
                   
            
            <input type="submit" name="txt7" value="<?php if(isset($_REQUEST['id'])) echo 'update'; else echo 'insert'; ?>"
                   style="width: 100%; background-color: #4CAF50; color: white; padding: 12px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
        </form>

    </div>
   
</body>
</html>

