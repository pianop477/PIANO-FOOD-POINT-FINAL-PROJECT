<?php 
include('server.php');
include('header_admin.php');

$select_users = mysqli_query($conn, "SELECT * FROM customer WHERE directory = 0 ORDER BY first_name ASC");
$count = 1;

if(empty($_SESSION['user_id'])) {
    header('location:login.php');
}
if($_SESSION['user_type']!=1) {
  header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PFP Customer Lists | Admin</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap3.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <body>
 <!--Navigation links--> 
    <!--section-->
        <div class="container-fluid" style="position: absolute; width: 100%; margin-top: 1%;">
            <div class="text-center">
                <h2 class="text-center page-header">Customers List</h2>
            </div>
            <table class="table table-bordered table-responsive table-hover">
                <thead style="font-size: 1.7rem;">
                    <tr>
                        <th>S/No</th>
                        <th>Customer Full Name</th>
                        <th>Phone Number</th>
                        <th></i> Street Location</th>
                        <th>Email Address</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                if(empty(mysqli_num_rows($select_users))) {
                  echo "<i><p style='text-align:center; font-size: 1.7rem; position: absolute; 
                  margin-top: 5%; width: 100%; font-weight: bold; color: green;'>Currently You have No Data Found</p></i>";
                } else
                while($row = mysqli_fetch_array($select_users)) { ?>
                <tbody>
                    <tr>
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['street']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td>
                            <a style="background: lightgreen; padding: 6px; border-radius: 4px; color:black;" 
                            href="update.php?update_user=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> Update</a>
                        </td>
                        <td>
                            <a style="background: darkred; padding: 6px; border-radius: 4px; color: white;" 
                            href="server.php?remove_user=<?php echo $row['id']; ?>"><i class="fa fa-user-times"></i> Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php 
                }
                ?>
            </table>
        </div>
            <script src="index.js"></script>
    </body>
</html>