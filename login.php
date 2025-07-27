<?php 
    include "confi.php";

    if(isset($_REQUEST['txt5']))
    {
       $n=$_REQUEST['txt1'];
       $e=$_REQUEST['txt2'];
       $p=$_REQUEST['txt3'];
       $c=$_REQUEST['txt4'];
 
        // mysqli_query($cn," insert into users set uname='$n',uemail='$e',upass='$p',ucontact='$c'")or die("Insert Error".mysqli_error($cn));
        $rel = mysqli_query($cn, "INSERT INTO users (uname, uemail, upass, ucontact) VALUES ('$n', '$e', '$p', '$c')")  or die("Insert Error: " . mysqli_error($cn));
        echo "Data Inserted";
    }

    //=================== login ========================//
    

    $ue=$_REQUEST['email'];
    $up=$_REQUEST['pass'];
    // echo $e;
    // echo $p;
    $b=$_REQUEST['btn'];

    if(isset($b))
    {
        $rel = mysqli_query($cn, "SELECT * FROM users where uemail='$ue' AND upass='$up'") or die("Select error: " . mysqli_error($cn));


        // echo  mysqli_num_rows($rel);
       
        if(mysqli_num_rows($rel)!=0)
        {
            $_SESSION['name']='jayraj';
           $rec=mysqli_fetch_array($rel);
           $_SESSION['uemail']=$rec['email'];
           $_SESSION['uid']=$rec['uid'];
            header("location:index.php");
        }
        else
        {
            echo "<script>alert('password inccorect')</script>";
        }
    }
   

?>


<html lang="en">
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="login.css">
<title>Home | login</title>

  </head>
  

<body >
<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Sign up</a></li>
          <li><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"> Sign Up for Free</h2>
            <form id="signup" method="post">
              <!-- <div class="row"> -->
                <!-- <div class="col-xs-12 col-sm-6"> -->
                  <div class="form-group">
                    <label> Name<span class="req">*</span> </label>
                    <input type="text"  name="txt1" class="form-control" id="first_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                <!-- </div> -->

                <!-- <div class="col-xs-12 col-sm-6">
                  <div class="form-group">  
                    <label> Last Name<span class="req">*</span> </label>
                    <input type="text" class="form-control" id="last_name" required data-validation-required-message="Please enter your name." autocomplete="off">
                    <p class="help-block text-danger"></p>
                  </div>
                </div> -->
              <!-- </div> -->
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" name="txt2" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" name="txt3" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Your Phone<span class="req">*</span> </label>
                <input type="tel" name="txt4" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
             
              <div class="mrgn-30-top">
                <!-- <button type="submit" class="btn btn-larger btn-block">
                Sign up
                </button> -->
                <input type="submit" name="txt5" value="Sign up" class="btn btn-larger btn-block"></input>
              </div>
            </form>
          </div>
          <div class="tab-pane fade in" id="login">
            <h2 class="text-uppercase text-center"> Log in</h2>
            <form id="login" method="post">
              <div class="form-group">
                <label> Your Email<span class="req">*</span> </label>
                <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address." autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <label> Password<span class="req">*</span> </label>
                <input type="password" name="pass" class="form-control" id="password" required data-validation-required-message="Please enter your password" autocomplete="off">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <!-- <button type="submit" class="btn btn-larger btn-block"/>
                Log in
                </button> -->
                <input type="submit" name="btn" value="log in" class="btn btn-larger btn-block"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container --> 
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="login.js"></script>
</body>