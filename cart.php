<?php 
    include "headermain.php";
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .cart-container {
        max-width: 900px;
        margin: 100px auto;
        background-color: #fff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
    }

    th, td {
        padding: 16px 20px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #333;
        color: white;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    .delete-link {
        color: red;
        text-decoration: none;
        font-weight: bold;
    }

    .total-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        font-size: 1.2em;
        font-weight: bold;
    }

    .order-btn {
        display: block;
        width: fit-content;
        margin: 0 auto;
        background-color: #28a745;
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        text-decoration: none;
        font-size: 1.1em;
        transition: background-color 0.3s ease;
    }

    .order-btn:hover {
        background-color: #218838;
        text-decoration: none;
        

    }
</style>

<div class="cart-container">
<?php 
    if(isset($_SESSION['name'])) {
        if(isset($_REQUEST['id'])) {
            $i = $_REQUEST['id'];
            mysqli_query($cn,"delete from cart where cartid = $i") or die ("delete error".mysqli_error($cn));
        }

        echo "<table>";
        echo "<tr>
                <th>PID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
              </tr>";

        $ab = $_SESSION['uid'];
        $sum = 0;
        $rel = mysqli_query($cn, "select * from cart join products on cart.pid = products.pid where uid = $ab") or die("select error".mysqli_error($cn));
            //   if (isset($_GET['cid'])) {
            //   $cid = intval($_GET['cid']); // or $_POST['cid']
            //   $result = mysqli_query($cn, "SELECT * FROM cart WHERE cid = $cid");
            //   } else {
            //    echo "Cart ID not set.";
            //   }

        while($rec = mysqli_fetch_array($rel)) {
            echo "<tr>
                    <td>{$rec['pid']}</td>
                    <td>{$rec['pname']}</td>
                    <td>₹ {$rec['pprice']}</td>
                    <td><a class='delete-link' href='cart.php?id={$rec['cartid']}'>Delete</a></td>
                  </tr>";
            $sum += $rec['pprice'];
        }

        echo "</table>";

        echo "<div class='total-section'>
                <div>Total Price:</div>
                <div>₹ $sum</div>
              </div>";

        echo "<a class='order-btn' href='order.php'>Order Now</a>";

    } else {
        echo "<script>alert('Your cart is empty');</script>";
        echo "<script>window.location.replace('index.php');</script>";
    }
?>
</div>
