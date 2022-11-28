<?php
include('server.php');
include('footer.php');

// $select_users = mysqli_query($conn, "SELECT * FROM users");

// $logged_id = $_SESSION['user_id'];

if(empty($_SESSION['user_id'])) {
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
        <h2 class="text-center page-header" style="margin-top: auto;">Edit Account Details</h2>
    </div>
    <div class="container-fluid" style="width: 50%; align-content: center;">
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">   
            <div class="form-group">
                <label for="fname" class="control-label">First Name: </label>
                <input type="text" name="fname" class="form-control" value="<?php echo $_SESSION['firstname']; ?>">
            </div>
            <div class="form-group">
                <label for="lname" class="control-label">Last Name: </label>
                <input type="text" name="lname" class="form-control" value="<?php echo $_SESSION['lastname']; ?>">  
            </div>
            <div class="form-group">
                <label for="street" class="control-label">Street Name: </label>
                <input type="text" name="street" class="form-control" value="<?php echo $_SESSION['street_name']; ?>">
            </div>
            <div class="form-group">
                <label for="phone" class="control-label">Phone Number: </label>
                <input type="text" name="phone" class="form-control" value="<?php echo $_SESSION['phone_number']; ?>"> 
            </div>
            <button type="submit" name="update" class="btn btn-success">UPDATE</button>

        </form>
    </div>
    </body>
</html>