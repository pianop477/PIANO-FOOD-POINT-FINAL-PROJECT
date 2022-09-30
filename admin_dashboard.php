<?php
include('server.php');
include('header_admin.php');
include('footer.php');

if(empty($_SESSION['user_id'])) {
    header('location:login.php');
}

if($_SESSION['user_type']!=1) {
    header('location: login.php');
}

$order_list = mysqli_query($conn, "SELECT * FROM orders");



?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Dashboard | Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
<!--Navigation links-->
<!--section-->

<div>
    <div>
        <h2 class="text-center page-header" style="margin-top: auto;">Your Admin Dashboard, <?php echo $_SESSION['fullname']; ?></h2>
        <div class="container-fluid" style="width: 80%; display: flex; justify-content: space-between; align-items: center;">
            <div class="container-fluid" style="width: 38.3%; background: orange; border-radius: 8px; color:white;">
                <h4 class="text-center page-header">NEW ORDERS</h4>
                <p><?php 
                $total_select = mysqli_query($conn, "SELECT * FROM orders WHERE reply = 0");
                if($get_total = mysqli_num_rows($total_select)){
                    echo '<h3 style="font-size: 4rem; text-align: center;">' .$get_total. '</h3>';
                }else{
                    echo '<h3 style="font-size: 4rem; text-align: center;">0</h3>';
                }
                ?></p>
                <p style=" text-align: center; font-weight:bold; "><a href="ordertable.php" style="color: green;">View Orders 	<i class="fa fa-arrow-circle-right fa-2x"></i></a></p>
            </div>
            <div class="container-fluid" style="width: 38.3%; background: darkred; border-radius: 8px; color:white;">
                <h4 class="text-center page-header">PROCESSED ORDERS</h4>
                <p><?php 
              $total_select = mysqli_query($conn, "SELECT * FROM orders WHERE reply=1");
              if($get_total = mysqli_num_rows($total_select)){
                  echo '<h3 style="font-size: 4rem; text-align: center;">' .$get_total. '</h3>';
              }else{
                  echo '<h3 style="font-size: 4rem; text-align: center;">0</h3>';
              }
                ?>
                </p>
                <p style=" text-align: center; font-weight:bold; "><a href="ordersprocessed.php" style="color: white;">View Orders 	<i class="fa fa-arrow-circle-right fa-2x"></i></a></p>
            </div>
            
        </div>
        <div class="container-fluid" style="width: 80%; display: flex; justify-content: space-between; align-items: center; margin-top: 8%;">
            <div class="container-fluid" style="width: 38.3%; background: lightgrey; border-radius: 8px;">
                <h4 class="text-center page-header">ALL MENU</h4>
                <p><?php
                $total_select = mysqli_query($conn, "SELECT * FROM menus");
                if($get_total = mysqli_num_rows($total_select)){
                    echo '<h3 style="font-size: 4rem; text-align: center;">' .$get_total. '</h3>';
                }else{
                    echo '<h3 style="font-size: 4rem; text-align: center;">0</h3>';
                }
                ?></p>
                <p style=" text-align: center; font-weight:bold; "><a href="admin_menu.php" style="color: black;">View Menu 	<i class="fa fa-arrow-circle-right fa-2x"></i></a></p>
            </div>
            <div class="container-fluid" style="width: 38.3%; background: lightgreen; border-radius: 8px;">
                <h4 class="text-center page-header">USERS</h4>
                <p><?php 
                $total_select = mysqli_query($conn, "SELECT * FROM customer where directory = 0");
                if($get_total = mysqli_num_rows($total_select)){
                    echo '<h3 style="font-size: 4rem; text-align: center;">' .$get_total. '</h3>';
                }else{
                    echo '<h3 style="font-size: 4rem; text-align: center;">0</h3>';
                }
                ?></p>
                <p style=" text-align: center; font-weight:bold; "><a href="users.php" style="color: black;">View Users 	<i class="fa fa-arrow-circle-right fa-2x"></i></a></p>
            </div>
        </div>
    

    </div>
</div>

</body>
</html>
