<?php
include('server.php');
include('users.php');
include('header_admin.php');

if(isset($_GET['update_menu'])) {
    $id = $_GET['update_menu'];

    $select_menus = mysqli_query($conn, "SELECT * FROM menus WHERE id = '$id' ");
    $fetch_food = mysqli_fetch_array($select_menus);
}
if(empty($_SESSION['user_id'])) {
    header('location:login.php');
}
if($_SESSION['user_type']!=1) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PFP Update Food Menu | Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
    </head>
    <body>
        <!--Navigation links--> 
<section>
    <div>
        <h2 class="text-center page-header">Update Food Menu</h2>
            <div style="width: 50%; align-content: center;">
                <form method="POST" name="update-form">
                    <div class="form-group">
                        <label for="name" class="control-label">Food Type/Name: </label>
                        <input type="hidden" name="id" class="form-control" id="desc" value="<?php echo $fetch_food['id']; ?>">
                        <input type="text" name="food_name" class="form-control" id="desc" value="<?php echo $fetch_food['menu_name']; ?>">
                        <span id="food-text" style="color: red;"></span>
                    </div>

                    <div class="form-group">
                        <label for="file" class="control-label">Price: </label>
                        <input type="text" name="food_price" class="form-control" value="<?php echo $fetch_food['menu_price']; ?>">
                        <span id="price-text" style="color: red;"></span>
                    </div>
                    
                    <button type="submit" name="edit_menu" class="btn btn-block btn-primary"><i class="fa fa-send"></i> UPDATE MENU</button>
                </form>
            </div>
    </div>
</section>

        <script src="index.js" defer></script>
    </body>
</html>
