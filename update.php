<?php 
include("server.php");
include('footer.php');
include('header_admin.php');

if(isset($_GET['update_user'])) {
    $id = $_GET['update_user'];

   $result = mysqli_query($conn, "SELECT * FROM customer WHERE id = '$id' ");
   $fetch_users = mysqli_fetch_array($result);


}
if(empty($_SESSION['user_id'])){
    header('location:login.php');
}



?>

<!DOCTYPE html>
<html>
    <head>
        <title>PFP Update User Info | Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap3.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<!--Navigation links--> 
<section>
    <div class="container-fluid" style="position: absolute; width: 100%; margin-top: 4%;">
    <div>
        <h2 class="text-center page-header" style="margin-top: auto;">Update User Info</h2>
    </div>
    <div class="container-fluid" style="width: 50%; align-content: center;">
    <!--<span style="font-size:1.5rem color:red;">Do you Want to Change User type of <?php echo $_SESSION['fullname']; ?>?</span>-->
        <form method="POST" name="update-form">
            <input type="hidden" name="id" value="<?php echo $$fetch_users['id']; ?>">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" id="desc" value="<?php echo $fetch_users['id']; ?>">
                <input type="hidden" name="fname" class="form-control" id="desc" value="<?php echo $fetch_users['first_name']; ?>">
                <span id="desc-text" style="color: red;"></span>
            </div>

            <div class="form-group">
                <input type="hidden" name="lname" class="form-control" id="file" value="<?php echo $fetch_users['last_name']; ?>" >
                <span id="file-text" style="color: red;"></span>
            </div>
            <div class="form-group">
                <input type="hidden" name="phone" class="form-control" id="file" value="<?php echo $fetch_users['phone']; ?>" >
                <span id="file-text" style="color: red;"></span>
            </div>
            <div class="form-group">
                <input type="hidden" name="street" class="form-control" id="file" value="<?php echo $fetch_users['street']; ?>" >
                <span id="file-text" style="color: red;"></span>
            </div>
            <div class="form-group">
                <input type="hidden" name="email" class="form-control" id="file" value="<?php echo $fetch_users['email']; ?>">
                <span id="file-text" style="color: red;"></span>
            </div>
            <div class="form-group">
               <label for="file" class="control-label">User Type: </label>
                <select name="usertype" class="form-control">
                    <option value="">----------SELECT--------</option>
                    <option value="0">Customer</option>
                    <option value="1">Admin</option>
                </select>
                <span id="file-text" style="color: red;"></span>
            </div>
            <button type="submit" name="edit" class="btn btn-block btn-primary"><i class="fa fa-send"></i> Shift User</button>
        </form>
    </div>
    </div>
        <script src="django.js" defer></script>
    </body>
</html>