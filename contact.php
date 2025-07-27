<?php 
    include "headermain.php";

    if(isset($_REQUEST['sub']))
{
	$n=$_REQUEST['name'];
	$e=$_REQUEST['email'];
	$s=$_REQUEST['subject'];
	$m=$_REQUEST['number'];
	mysqli_query($cn,"insert into `contact` set `cuname`='$n',`cuemail`='$e',`cusub`='$s',`cunum`='$m'");
	header("location:index.php");
}
?>
        
          <br>
          <div class="container-fluid">
            <div class="row ">
                <div class="card  col-md-10 offset-md-1" data-aos="flip-left" style="background-color: #A9B5DF;">
                    <div class="card-header sty" >
                        <a href="#jayraj" class="card-link text-white" data-toggle="collapse">Our Location</a>
                        
                        
                    </div>
                    <div class="card-body collapse col-md-12" id="jayraj">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6123763841156!2d70.7594292!3d22.2926686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbd2f288f55b%3A0xb95487047aee1f4e!2sNityam%20Webtech!5e0!3m2!1sen!2sin!4v1739376808911!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                 
            </div><br>
             <div class="row">
                <div class="card  col-md-10 offset-md-1" data-aos="flip-left" style="background-color: #A9B5DF;">
                    <div class="card-header ">
                        
                        <a href="#jayraj1" class="card-link text-white" data-toggle="collapse">Inquiry</a>
            
                    </div>
                    <div class="card-body collapse col-md-12" id="jayraj1">
                       
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="email" id="" placeholder="Enter Your Email" class="form-control">
                                            </div>
                                        </div><br><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="number" id="" placeholder="Enter Your Mobile Number" class="form-control">
                                            </div>
                                        </div><br><br>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" name="name" id="" placeholder="Enter Your Name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea name="subject" rows="8" class="form-control" placeholder="Subject"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <input type="submit" name="sub" class="btn btn-outline-success">
                                    </div>
                                </div>
                            </form>
                        
                    </div>
                </div>
             </div>
            
        
        </div>
    
         <br><br><br><br><br><br><br><br><br><br><br><br><br>

         <!------------ Footer ------------>

         <div class="footer-area">
            <div class="container ">
                <div class="row">
                    <div class=" col-md-3">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">About us</h2>
                            <p>Welcome to LaptopZone your go-to destination for the latest and most reliable laptops at unbeatable prices. 
                                Shop with confidence and find the perfect laptop for your needs today!
                            </p>
                        </div>
                    </div>
                    <div class=" col-md-3">
                        <div class="footer-box get-in-touch">
                            <h2 class="widget-title">Get in Touch</h2>
                            <ul>
                                <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                                <li>dangarjayraj5709@gmail.com</li>
                                <li>+91 953 707 5884</li>
                            </ul>
                        </div>
                    </div>
                    <div class=" col-md-3">
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
                    <div class=" col-md-3">
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
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="login.js"></script>
  </body>
</html>
