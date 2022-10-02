<?php 
include('server.php');
include('footer.php');
include('header_customer.php');
$logged_user = $_SESSION['user_id'];
//include('footer.php');
if(empty($_SESSION['user_id'])) {
  header('location:login.php');
}
if($_SESSION['user_type']!=0) {
  header('location:login.php');
}
$count = 1;
$select_menus = mysqli_query($conn, "SELECT customer.id, customer.first_name, customer.last_name,customer.email, customer.phone, 
customer.street, orders.order_name, orders.quantity,orders.reply, orders.order_date, orders.total_price FROM 
customer INNER JOIN orders ON customer.id = orders.customer_id WHERE customer.id = '$logged_user'  ORDER BY orders.order_date DESC");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PFP | Customer Orders</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<!--section -->
<section>
  <div class="container-fluid">
    <div class="text-center page-header" style="margin-top: auto;">
        <h2 style="margin-top: auto;">My Orders</h2>
    </div>
    <table class="table table-responsive table-hover table-bordered table-lg">
      <thead style="font-size: 1.7rem;">
          <tr>
            <th>S/No</th>
            <th><i class="fa fa-cutlery"></i> Food Name</th>
            <th><i class="fa fa-gift"></i> Quantity</th>
            <th><i class="fa fa-dollar"></i> Price</th>
            <th><i class="fa fa-time"></i> Order Date</th>
            <th><i class="fa fa-bell"></i> Notification</th>
          </tr>
      </thead>
                    <?php 
                    if(empty(mysqli_num_rows($select_menus))) {
                      echo "<i><p style='text-align:center; font-size: 1.7rem; position: absolute; 
                      margin-top: 5%; width: 100%; font-weight: bold; color: green;'>
                      Currently You have No Data Found</p></i>";
                    } else
                    while($row = mysqli_fetch_array($select_menus)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['order_name']; ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['total_price']; ?></td>
                            <td><?php echo $row['order_date']; ?></td>
                            <td><?php if($row['reply']==1){echo '<span style=" color:green;">You will Receive your Order shortly,
                                 Thanks for Purchasing with us</span>';} else { echo '<span style="color: red;">In Progress</span>'; } ?></td>
                        </tr>

                    </tbody>

                    <?php 
                
                    ?>
                    <?php }
                    ?>
                
  </div>
</section>
<script src="index.js" defer></script> 
</body>
</html>
