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
            <a href="index.php"><i class="fa-solid fa-user fa-lg"></i>  </a>
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
                    <a href="#">View category</a>
                </div>
            </li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <br><br>
    <form >
    <?php 
    
    include "configa.php";
    echo "<table border=1 cellpadding=10>";
    echo "<tr><th>Id<th>Name<th>Contact</tr>";
    $rel=mysqli_query($c,"select * from student") or die("select error".mysqli_error($c));
    while($rec=mysqli_fetch_array($rel))
    {
        echo "<tr>";
        echo "<td>".$rec['sid']."</td>";
        echo "<td>".$rec['sname']."</td>";
        echo "<td>".$rec['scontact']."</td>";
        echo "</tr>";

    }
    echo "</table>"
?>
    </form>
   