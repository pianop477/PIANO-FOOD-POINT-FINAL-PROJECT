<?php   

include('server.php');
include('footer.php');
include('header_customer.php');

if(empty($_SESSION['user_id'])) {
    header('location:login.php');
}
if($_SESSION['user_type']!=0) {
    header('location:login.php');
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PFP | Generate Order</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
        
    </head>
    <body>
<!--Navigation links-->
<!--section -->
<section>
    <div>
        <h2 class="text-center page-header" style="margin-top: auto;">Place Your Order</h2>
    </div>
    <div style="width: 50%; align-content: center;">
        <form action="#" method="POST" onsubmit="return validate_quantity()">
            <div class="form-group">
                <label for="food-name" class="control-label">Food Name/Type</label>
                <input type="text" name="food" value="<?php echo $_SESSION['chakula'] ?>" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="initial-price" class="control-label">Price</label>
                <input type="text" name="price" id= "price" value="<?php echo $_SESSION['price']; ?>" class="form-control" disabled>
            </div>
            <div class="form-group">
                <label for="quantity" class="control-label">Quantity</label>
                <input type="number" id= "quantity" name="quantity" class="form-control" required>
                <span id="err-quantity" style="color: red;"></span>
            </div>
            <div class="form-group">
                <button type="submit" name="send_order" class="btn btn-success btn-block"><i class="fa fa-send"></i> SEND ORDER</button>
            </div>

        </form>
    
    </div>
</section>

<script src="index.js"></script>
    </body>
</html>
