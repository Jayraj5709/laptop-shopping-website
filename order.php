<?php
include "headermain.php";

//=================================================
$id3=$_SESSION['uid'];
$_SESSION['uid']=$id3;
//=================================================
if(isset($_REQUEST['order']))	
{	
	$n=$_REQUEST['sname'];
	$a=$_REQUEST['add'];
	$c=$_REQUEST['mob'];
	$p=$_REQUEST['pay'];
	$ost="received";
	$res=mysqli_query($cn,"select * from cart  where uid='$id3'");
	while($rec=mysqli_fetch_array($res))
	{
		$pid=$rec['pid'];
        mysqli_query($cn,"INSERT INTO `orders` (uid, pid, shiping, address, contact, pmode, ost)  VALUES ($id3, $pid, '$n', '$a', '$c', '$p', '$ost')")or die("Insert error: " . mysqli_error($cn));
}
	mysqli_query($cn,"delete from cart where uid='$id3'");
	//header("location:cart.php");
}	
?>
<div class="container">
<h1> -ORDER PAGE- </h1>
<hr/>
<br/>
<br/>
  <form action="order.php" method="post">
	<div class="row">

		<div class="col-lg-6 col-md-8">
			<input type="text" class="form-control" name="sname" placeholder="Shiping Name"><br/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-8">
			<textarea class="form-control" name="add" placeholder="Address"></textarea><br/>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-8">
			<input type="text" class="form-control" name="mob" placeholder="Contect No."><br/>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-lg-6 col-md-8">
			<input type="radio"  name="pay" value="Online"> Online
			<input type="radio"  name="pay" value="COD"> COD
			<input type="radio"  name="pay" value="Card"> Card
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="col-lg-2 col-md-2">
			<input type="submit" class="btn btn-outline-dark" name="order" value="Order-Now">
		</div>
	</div>
  </form>
 </div>
	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>