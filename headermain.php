<?php 
    include "confi.php";

    ///============  search =============//
    if(isset($_REQUEST['srcbtn']))
    {
	$se=$_REQUEST['src'];
	//echo $se;
	$rel=mysqli_query($cn,"select * from products where pname='$se' ");
	while($rec=mysqli_fetch_array($rel))
	{
		$search=$rec['pname'];
	    $_SESSION['search']=$search;
		echo "<script>window.location.replace('search.php')</script>";
	}
	
	
	
    }	
   
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="aos.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="addtocart.css">
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Font Awesome (For Icons) -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    

    <title>Home</title>
  
   
    </head>
    <body style="background-color: #FFF2F2">   

  <!-- Loder -->
  <!-- <div id="loader">
    <div class="spinner"></div>
</div> -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid" >
       
        <!-- Logo -->
        <a class="navbar-brand" href="#">LaptopZone</a>
        
        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" style="background-color: blue; border: 2px solid white; font-size: 16px;" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" ></span>
        </button>        
            


        <!-- Navbar Links -->

        <div class="collapse navbar-collapse" id="navbarNav">
            <span class="mr-auto"></span>
            <ul class="navbar-nav ">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="gaming_laptop.php">Gaming Laptops</a></li>
                <li class="nav-item"><a class="nav-link" href="Student_laptop.php">Student Laptops</a></li> -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="brandsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Categories
                  </a>  
                  <ul class="dropdown-menu" aria-labelledby="brandsDropdown">
                <?php
                $rel = mysqli_query($cn, "SELECT * FROM categories") or die("Select error: " . mysqli_error($cn));
                while($rec = mysqli_fetch_array($rel))
                 {
                ?>
                     <li>
                       <a class="dropdown-item" style="color: black;" href="category.php?a=<?php echo @$rec['cid']; ?>"><?php echo @$rec['cname']; ?> </a>
                     </li>
               <?php
               }
              ?>
    </ul>
</li>

                <!-- Dropdown for Brands -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="brandsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Brands
                    </a>
                    <ul class="dropdown-menu"  aria-labelledby="brandsDropdown"> -->
                        <!-- <li><a class="dropdown-item" style="color: black;" href="#">Apple</a></li> -->
                        <!-- <li><a class="dropdown-item" style="color: black;" href="dell.php">Dell</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="hp.php">HP</a></li> -->
                        <!-- <li><a class="dropdown-item" style="color: black;" href="#">Lenovo</a></li> -->
                        <!-- <li><a class="dropdown-item" style="color: black;" href="asus.php">Asus</a></li> -->
                    <!-- </ul>
                </li> -->
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul> &nbsp; &nbsp; &nbsp;

            <!-- Search Bar -->
            
            
            <form class="d-flex ms-3" action="search.php" method="GET">
               <input class="form-control search-box" type="search" name="src" placeholder="Search laptops..." aria-label="Search">
               <button class="btn btn-outline-primary ms-2" name="srcbtn" type="submit">    <i class="fa-solid fa-magnifying-glass"></i> </button>
            </form> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

            <span class="mr-auto"></span>

            <!-- Icons (Cart & User) -->

            <a href="cart.php" class="icon-link"><i class="fas fa-shopping-cart"></i>
            <?php 
            if(isset($_SESSION['uid']))
            {
                $ab=$_SESSION['uid'];
                $count = mysqli_query($cn, "select * from cart where uid=$ab ") or die("select error".mysqli_error($cn));
                $tot=mysqli_num_rows($count);
                echo $tot;
                
            }
           else
           {
            echo 0;
           }

            ?>
           </a>

            <?php 
            if(isset($_SESSION['name']))
            {
               
                echo " <a href='logout.php' class='icon-link'><i class='fa-solid fa-right-from-bracket'></i></a>";
                echo  "<a href='myorders.php' class='icon-link'><i class='fas fa-shopping-bag' style='font-size: 24px;'></i>";

                

            }
            else    
            {
                echo " <a href='login.php' class='icon-link'><i class='fas fa-user'></i> " ;

            }
        

            ?>
           </a>



        </div>
    </div>
   
</nav>