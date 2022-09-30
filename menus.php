<?php   

include('server.php');
include('footer.php');
include('header_admin.php');
if(empty($_SESSION['user_id'])) {
    header('location: login.php');
}
if($_SESSION['user_type']!=1) {
    header('location:login.php');
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PFP Register Foods | Admin</title>
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
        <div style="margin-top: auto;">
            <h2 class="text-center page-header">Add Menu</h2>
        </div>
        <div style="width: 50%; align-content: center;">
            <span  style="color:green; align-content:center; font-weight:bold; font-size: 2rem;">
                <?php if(isset($success_menus)) { echo $success_menus; } ?>
            </span>
            <form action="#" method="POST" onsubmit="return validate_menus()">
                <div class="form-group">
                    <label for="food-name" class="control-label">Food Name/Type</label>
                    <input type="text" name="food" class="form-control" id="food">
                    <span id="food-text" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <label for="initial-price" class="control-label">Price</label>
                    <input type="text" name="price" class="form-control" id="price">
                    <span id="price-text" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <button type="submit" name="add-menu" class="btn btn-success btn-block"><i class="fa fa-send"></i>  ADD MENU</button>
                </div>
            </form>
        </div>
    </section>

<script src="index.js"></script>
</body>
</html>