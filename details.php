<?php 
include('server.php');
include('footer.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PFP | Customer Orders</title>
        <link rel="stylesheet" href="bootstrap3.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<!--section -->
    <section>
        <div class="container-fluid">
            <div class="container">
                <h2 class="text-center page-header" style="margin-top: 5%;">Account Details</h2>
            </div>
            <div class="container" style="width: 50%; margin:auto;">
                <table class="table table-responsive">
                    <thead>
                        <tr class="info">
                            <!-- <th>S/No</th> -->
                            <th>Details</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <?php 
                    // $count = 1;
                    $logged_id = $_SESSION['user_id'];
                    $rows = mysqli_query($conn, "SELECT * FROM customer WHERE id = '$logged_id' ");
                    while($row = mysqli_fetch_array($rows)) { ?>
                    <tbody>
                        <tr class="success">
                            <td><i class="fa fa-user"></i> First Name: </td>
                            <td><?php echo $row['first_name']; ?></td>
                        </tr>
                        <tr class="danger">
                            <td><i class="fa fa-user"></i> Last Name: </td>
                            <td><?php echo $row['last_name']; ?></td>
                        </tr>
                        <tr class="warning">
                            <td><i class="fa fa-phone"></i> Phone Number: </td>
                            <td><?php echo $row['phone']; ?></td>
                        </tr>
                        <tr class="active">
                            <td><i class="fa fa-map-marker"></i> Street Name Address: </td>
                            <td><?php echo $row['street']; ?></td>
                        </tr>
                        <tr class="success">
                            <td><i class="fa fa-envelope"></i> Email Address: </td>
                            <td><?php echo $row['email']; ?></td>
                        </tr>
                        <tr class="default">
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="warning">
                            <td>
                                <span style="padding: 8px; background: orange; border-radius: 5px; color: white;">
                                    <a href="update-user-info.php?update-info=<?php echo $row['id']; ?>">Update Details</a>
                                </span>
                            </td>
                            <td>
                                <!-- <button style="background-color: lightgreen; border:none;" type="submit" name="back">Go Back</button> -->
                            </td>
                        </tr>
                    </tbody>
                    <?php 
                    }
                    ?>
                </table>
            
            </div>
        </div>
    </section>