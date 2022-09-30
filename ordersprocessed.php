<?php 
include('server.php');
include('footer.php');
include('header_admin.php');

$select_menus = mysqli_query($conn, "SELECT customer.id, customer.first_name, customer.last_name,customer.email, customer.phone, 
customer.street, orders.id, orders.order_name, orders.quantity,orders.reply, orders.order_date, orders.total_price FROM 
customer INNER JOIN orders ON customer.id = orders.customer_id WHERE orders.reply = 1 ORDER BY orders.order_date DESC");
$count = 1;

if(empty($_SESSION['user_id'])){
    header('location:login.php');
}
if($_SESSION['user_type']!=1) {
    header('location:login.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PFP Processed Orders | Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    </head>
    <body>
<!--Navigation links--> 

        <div>
            <div class="text-center page-header" style="margin-top: auto;">
                <h2 style="margin-top: auto;">All Processed Orders</h2>
            </div>
            <div>
            <table class="table table-bordered table-responsive table-hover">
                <thead style="font-size: 1.7rem;">
                    <tr>
                        <th></i>S/No</th>
                        <th><i class="fa fa-user"></i> Customer Name</th>
                        <th><i class="fa fa-cutlery"></i> Food Type/Name</th>
                        <th><i class="fa fa-gift"></i> Quantity</th>
                        <th><i class="fa fa-dollar"></i> Total Price</th>
                        <th><i class="fa fa-phone"></i> Phone Number</th>
                        <th><i class="glyphicon glyphicon-map-marker"></i> Street Location</th>
                        <th><i class="fa fa-clock-o"></i> Order Date</th>
                    </tr>
                </thead>
                <?php
                if(empty(mysqli_num_rows($select_menus))){
                    echo "<i><p style='text-align:center; font-size: 1.7rem; position: absolute; 
                    margin-top: 5%; width: 100%; font-weight: bold; color: green;'>
                    Currently You have no Orders Found</p></i>";
                } else
                while($row = mysqli_fetch_array($select_menus)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                        <td><?php echo $row['order_name']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['total_price']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['street']; ?></td>
                        <td><?php echo $row['order_date']; ?></td>
                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
        </div>

    </body>
</html>