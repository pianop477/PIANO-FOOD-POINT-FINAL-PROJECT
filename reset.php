<?php
include('server.php');
include('footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Change Password | Admin</title>
        <link rel="stylesheet" href="bootstrap3.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Reset Password | User</title>
    </head>
    <body>
        <!--nav links-->
	<nav class="navbar navbar-inverse">
    <div style="font-size:1.7rem; font-weight: bold;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#" style="font-size: 3rem; font-weight:bold;">PFP</a>
            <i style="color:orange;">Piano</i>
            <i style="color: orange;">Food</i>
            <i style="color: orange;">Point</i>
        </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
        <div>
            <h2 class="text-center page-header">New Password</h2>
            <div class="container-fluid width" style="width: 50%; align-content: center;">
               
                <form action="" method="POST">
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Enter New Password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name = "newpassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                    <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                        <button type="submit" name="change-password" class="btn btn-success">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="index.js"></script>
    </body>
</html>