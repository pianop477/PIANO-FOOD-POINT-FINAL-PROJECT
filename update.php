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
        <h2 class="text-center page-header" style="margin-top: auto;">Update User Info</h2>
    </div>
    <div style="width: 50%; align-content: center;">
        <form method="POST" name="update-form">
            <input type="hidden" name="id" value="<?php echo $$fetch_users['id']; ?>">
            <div class="form-group">
                <label for="name" class="control-label">First Name: </label>
                <input type="hidden" name="id" class="form-control" id="desc" value="<?php echo $fetch_users['id']; ?>">
                <input type="text" name="fname" class="form-control" id="desc" value="<?php echo $fetch_users['first_name']; ?>">
                <span id="desc-text" style="color: red;"></span>
            </div>

            <div class="form-group">
                <label for="file" class="control-label">Last Name: </label>
                <input type="text" name="lname" class="form-control" id="file" value="<?php echo $fetch_users['last_name']; ?>">
                <span id="file-text" style="color: red;"></span>
            </div>
            <div class="form-group">
                <label for="file" class="control-label">Phone: </label>
                <input type="text" name="phone" class="form-control" id="file" value="<?php echo $fetch_users['phone']; ?>">
                <span id="file-text" style="color: red;"></span>
            </div>
            <div class="form-group">
                <label for="file" class="control-label">Street: </label>
                <input type="text" name="street" class="form-control" id="file" value="<?php echo $fetch_users['street']; ?>">
                <span id="file-text" style="color: red;"></span>
            </div>
            <div class="form-group">
                <label for="file" class="control-label">Email Address: </label>
                <input type="text" name="email" class="form-control" id="file" value="<?php echo $fetch_users['email']; ?>">
                <span id="file-text" style="color: red;"></span>
            </div>
            <div class="form-group">
               <label for="file" class="control-label">User Type: </label>
                <input type="text" name="usertype" class="form-control" id="file" value="<?php echo $fetch_users['directory']; ?>">
                <span id="file-text" style="color: red;"></span>
            </div>
            <button type="submit" name="edit" class="btn btn-block btn-primary"><i class="fa fa-send"></i> Update user</button>
        </form>
    </div>
        <script src="django.js" defer></script>
    </body>
</html>