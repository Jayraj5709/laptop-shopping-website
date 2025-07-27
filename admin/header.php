<?php 
    include "confi.php";
    if (!isset($_SESSION['name']))
    {
        header('location:home.php');
        exit;
    }
?>
<!DOCTYPE html>




<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <h1>Admin Pannel</h1>
        </div>
        <div class="login">
            <!-- <a href="index.php"><i class="fa-solid fa-user fa-lg"></i>  </a> -->
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
    </div>

    <!-- Navigation bar -->

    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li>
                <a href="#">Category ▾</a>
                <div class="dropdown">
                    <a href="insertcategory.php">Insert category</a>
                    <a href="viewcategory.php">View category</a>
                </div>
            </li>
            <li>
                <a href="#">Users ▾</a>
                <div class="dropdown">
                    <a href="users.php">View Users</a>
                </div>
            </li>
            <li>
                <a href="#">Product ▾</a>
                <div class="dropdown">
                    <a href="insertproduct.php">Insert product</a>
                    <a href="viewproduct.php">View product</a>
                </div>
            </li>
            <li>
                <a href="#">Orders ▾</a>
                <div class="dropdown">
                    <a href="vieworders.php">View Orders</a>
                </div>
            </li>
        </ul>
    </nav>