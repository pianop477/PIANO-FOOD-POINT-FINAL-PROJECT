<?php
include('server.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reset Password | User</title>
    </head>
    <body>
        <form action="#" method="POST">
            <input type="hidden" name="email" placeholder="Email Address" value="<?php echo $_SESSION['email']; ?>">
            <input type="password" name="password" placeholder="Enter New Password">
            <input type="password" placeholder="Confirm Password">
            <button type="submit" name="new_pass">Change Password</button>
            <a href="login.php">Login</a>
        </form>
    </body>
</html>