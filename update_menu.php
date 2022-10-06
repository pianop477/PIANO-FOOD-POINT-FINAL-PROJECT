<?php
include('server.php');
include('header_admin.php');
include('footer.php');

if(isset($_GET['update_menu'])) {
    $id = $_GET['update_menu'];
}
$select_menus = mysqli_query($conn, "SELECT * FROM menus WHERE id = '$id' ");
$fetch_menus = mysqli_fetch_array($select_menus);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Menu | Admin</title>
        <!--external links for bootstrap-->

        <link rel="stylesheet" href="bootstrap3.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <section>
        <div class="container-fluid" style="position: absolute; width: 100%; margin-top: 3%;">
        <div>
            <h2 class="text-center page-header">Update Menu</h2>
        </div>
        <div class="container" style="width: 50%; align-content: center;">
            <form action="#" method="POST" onsubmit="return validate_menus()">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="food-name" class="control-label">Food Name/Type</label>
                    <input type="text" name="food_name" class="form-control" id="food" value="<?php echo $fetch_menus['menu_name']; ?>">
                    <span id="food-text" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <label for="initial-price" class="control-label">Price</label>
                    <input type="text" name="food_price" class="form-control" id="price" value="<?php echo $fetch_menus['menu_price']; ?>">
                    <span id="price-text" style="color:red;"></span>
                </div>
                <div class="form-group">
                    <button type="submit" name="edit_menu" class="btn btn-success btn-block"><i class="fa fa-send"></i>  UPDATE</button>
                </div>
            </form>
        </div>
        </div>
    </section>
    </body>
</html>