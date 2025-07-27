<?php 
    include "headermain.php";
    $id=$_SESSION['uid'];
    $_SESSION['uid']=$id;
    
?>
<?php 
  if(isset($_REQUEST['a']))
  {
    $cid = $_REQUEST['a'];
  }
?>

<br><br>
<div class="container">
    <div class="row"> 
      <?php 
              $rel = mysqli_query($cn, "SELECT * FROM products where cid='$cid'") or die("Select error: " . mysqli_error($cn));

               while($rec = mysqli_fetch_array($rel))
                  {
                            ?>
        <div class="col-md-3  col-sm-6 ">
            <div class="card " >
                <img src="admin/<?php  echo $rec['pphoto1'];  ?>" style="height:250px; padding: 20px 0 20px 0;" alt="">
            <div class="card-body">
                <h2 class="card-title"><?php echo @$rec['pname']; ?> </h2>  
                <p class="card-subtitle text-muted">Special Price= <?php echo @$rec['pprice']; ?> <sub style="text-decoration:line-through; "><?php echo @$rec['pmrp']; ?></sub>  </p>
               <br>
                <a href="addtocart.php?a=<?php echo @$rec['pid']; echo@$rec['uid']; ?>"  style="text-decoration: none; color: green;">View Details</a>

            </div>
            </div>
        </div>
        
        <?php 
               
            }
           
                ?>
    </div>
     <!-- <sub style=" color: green;">31% off</sub>  -->
       <br>
</div>
  <!---------------- footer --------------->

<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class=" col-md-3  col-sm-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">About us</h2>
                    <p>Welcome to LaptopZone your go-to destination for the latest and most reliable laptops at unbeatable prices. 
                        Shop with confidence and find the perfect laptop for your needs today!
                    </p>
                </div>
            </div>
            <div class=" col-md-3  col-sm-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Get in Touch</h2>
                    <ul>
                        <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                        <li>dangarjayraj5709@gmail.com</li>
                        <li>+91 953 707 5884</li>
                    </ul>
                </div>
            </div>
            <div class=" col-md-3  col-sm-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Pages</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gaming_laptop.php">Gaming Laptops</a></li>
                        <li><a href="Student_laptop.php">Student Laptops</a></li>
                       
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=" col-md-3  col-sm-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">Subscribe</h2>
                    <p>Subscribe to our mailing list to get the latest updates.</p>
                    <form action="index.php">
                        <input type="email" placeholder="Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Hide loader after 1 second
    setTimeout(function() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content").style.display = "block";
    }, 300);
</script>

   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        document.getElementById("jayraj").addEventListener("click", function() {
            this.style.display = "none"; // Button को हाइड करें
        });
    </script>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
