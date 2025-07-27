<?php 
 include "headermain.php";
// include "confi.php";  

$id=$_SESSION['uid'];
$_SESSION['uid']=$id;
//echo $id;
{
  if(isset($_REQUEST['cart']))
  {
    if(isset($_SESSION['name']))
    {
      $pid=$_REQUEST['id'];
      
     //echo $id;

      mysqli_query($cn," insert into cart set pid='$pid' , uid='$id'")or die("Insert Error".mysqli_error($cn));
      echo "<script> window.location.replace('cart.php')</script>";
    }
    else
    {
      echo "<script>alert('please log-in') </script>";
      echo "<script> window.location.replace('login.php')</script>";
    }
  }
}

if(isset($_REQUEST['a']))
{
   $i = $_REQUEST['a'];
   
   $rel = mysqli_query($cn,"select * from products where pid='$i'") or die ("select error".mysqli_error($cn));
   $rec = mysqli_fetch_array($rel);
   //echo $i;
}
?>



  <div class="container-fluid min-vh-100 d-flex align-items-center">
    <div class="row w-100 bg-white shadow rounded overflow-hidden align-items-center justify-content-center" style="min-height: 100vh;">
      
      
      <div class="col-lg-6 ">
        <img src="admin/<?php echo $rec['pphoto1']; ?>" class="img-fluid w-75 " alt="Acer Nitro Laptop">
    </div>
      <div class="col-lg-6 p-5 d-flex flex-column justify-content-center">

      <input type="hidden" name="uid" value="<?php echo @$rec['uid']; ?>">

        <h1 class="product-title mb-3"><?php echo $rec['pname']; ?></h1>
        <p class="product-price mb-3"><?php echo $rec['pprice']; ?></p>
        <p class="product-description mb-4"> <?php echo $rec['pd']; ?> </p>

        <div class="d-flex align-items-center gap-3">
          <form method="post">
         
          <input type="hidden" name="id" value=" <?php echo @$rec['pid']; ?>">
           <!-- <button class="btn btn-primary px-4" name="cart" >Add to Cart</button>       onclick="addToCart()" -->
          <input  class="btn btn-primary px-4" type="submit" name="cart" value="Add to Cart"> </input>
          </form>
         
        </div>
      </div>
      
    </div>
  </div>

  <!-- <script>
    function addToCart() {
      const qty = document.getElementById("quantity").value;
      alert(`Added ${qty} item(s) to cart.`);
    }
  </script> -->

</body>
</html>

