<?php
include('server.php');
include('header_customer.php');
include('footer.php');

if(empty($_SESSION['user_id'])) {
    header('location:login.php');
  }
  if($_SESSION['user_type']!=0) {
    header('location:login.php');
  }
  $logged_user = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard | Customer</title>
        <link rel="stylesheet" href="bootstrap3.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
<!--Navigation links-->
<!--section-->

<div>
    <div class="container-fluid;" style="position: absolute; width: 100%; margin-top: 8%;">
        <h2 class="text-center page-header" style="margin-top: auto;">Welcome Back,  
        <span style="color: blue;"><?php echo $_SESSION['fullname']; ?></span></h2>
        <div class="container-fluid" style="width: 80%; display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
            <div class="container-fluid" style="width: 38.3%; background: orange; border-radius: 8px;">
                <h2 class="text-center page-header">MY CART</h2>
                <p>
                <?php 
                $total_select = mysqli_query($conn, "SELECT * FROM orders WHERE customer_id = '$logged_user' ");
                if($get_total = mysqli_num_rows($total_select)){
                    echo '<h3 style="font-size: 4rem; text-align: center;">' .$get_total. '</h3>';
                }else{
                    echo '<h3 style="font-size: 4rem; text-align: center;">0</h3>';
                }
                ?>
                </p>
                <p style=" text-align: center; font-weight:bold; "><a href="customertable.php">View Cart 	<i class="fa fa-arrow-circle-right fa-2x"></i></a></p>
            </div>
            <div class="container-fluid" style="width: 38.3%; background: lightgreen; border-radius: 8px; color: black;">
                <h2 class="text-center page-header">ALL MENU</h2>
                <p><?php
                $total_select = mysqli_query($conn, "SELECT * FROM menus");
                if($get_total = mysqli_num_rows($total_select)){
                    echo '<h3 style="font-size: 4rem; text-align: center;">' .$get_total. '</h3>';
                }else{
                    echo '<h3 style="font-size: 4rem; text-align: center;">0</h3>';
                }
                ?></p>
                <p style=" text-align: center; font-weight:bold; "><a href="index.php">View Menu 	<i class="fa fa-arrow-circle-right fa-2x"></i></a></p>
            </div>
        </div>
    

    </div>
</div>


</body>
</html>

