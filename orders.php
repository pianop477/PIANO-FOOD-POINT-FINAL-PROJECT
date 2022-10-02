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
<body>
    <section>
        <div class="container-fluid" style="position: absolute; width: 100%; margin-top: 3%;">
        <div>
            <h2 class="text-center page-header">Place Your Order</h2>
        </div>
        <div class="container" style="width: 50%; align-content: center;">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="food-name" class="control-label">Food Name/Type</label>
                    <input type="text" name="food_name" class="form-control" id="food" value="<?php echo $_SESSION['chakula']; ?>">
                    <span id="food-text" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <label for="initial-price" class="control-label">Price</label>
                    <input type="text" name="food_price" class="form-control" id="price" value="<?php echo $_SESSION['price']; ?>">
                    <span id="price-text" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <label for="quantity" class="control-label">Quantity</label>
                    <input type="number" name="quantity" class="form-control" required> 
                </div>
                <div class="form-group">
                    <button type="submit" name="send_order" class="btn btn-success btn-block"><i class="fa fa-send"></i>  SEND ORDER</button>
                </div>
            </form>
        </div>
        </div>
    </section>
    </body>
<script src="index.js"></script>
    </body>
</html>
