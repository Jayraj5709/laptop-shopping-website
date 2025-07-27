<?php 
    include "headermain.php";  

    $id = $_SESSION['uid'];
    $_SESSION['uid'] = $id;
?>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f7fa;
        margin: 0;
        padding: 0;
    }

    .order-container {
        max-width: 1100px;
        margin: 100px auto;
        background-color: white;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 16px 20px;
        text-align: center;
        border-bottom: 1px solid #e0e0e0;
    }

    th {
        background-color: #333;
        color: white;
        font-size: 0.95rem;
        text-transform: uppercase;
    }

    tr:hover {
        background-color: #f9f9f9;
    }

    .delete-link {
        color: #e74c3c;
        font-weight: bold;
        text-decoration: none;
    }

    .delete-link:hover {
        text-decoration: underline;
    }

    .heading {
        text-align: center;
        font-size: 1.8em;
        margin-bottom: 20px;
        color: #2c3e50;
    }
</style>

<div class="order-container">
    <div class="heading">My Orders</div>

    <?php 
        if (isset($_REQUEST['id'])) {
            $i = $_REQUEST['id'];
            mysqli_query($cn, "delete from orders where oid = $i") or die ("delete error".mysqli_error($cn));
        }

        echo "<table>";
        echo "<tr>
                <th>Order ID</th>
                <th>Shipping</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Payment Mode</th>
                <th>Status</th>
                <th>Action</th>
              </tr>";

        $rel = mysqli_query($cn, "select * from orders where uid='$id'") or die("select error".mysqli_error($cn));
        while($rec = mysqli_fetch_array($rel)) {
            echo "<tr>
                    <td>{$rec['oid']}</td>
                    <td>{$rec['shiping']}</td>
                    <td>{$rec['address']}</td>
                    <td>{$rec['contact']}</td>
                    <td>{$rec['pmode']}</td>
                    <td>{$rec['ost']}</td>
                    <td><a class='delete-link' href='myorders.php?id={$rec['oid']}'>Delete</a></td>
                  </tr>";
        }

        echo "</table>";
    ?>
</div>
