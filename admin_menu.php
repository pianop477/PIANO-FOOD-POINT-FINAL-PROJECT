<?php
include('server.php');
include('footer.php');
include('header_admin.php');

if(empty($_SESSION['user_id'])) {
    header('location:login.php');
}
if($_SESSION['user_type']!=1) {
    header('location:login.php');
}
$count = 1;
$select_menus = mysqli_query($conn, "SELECT * FROM menus ORDER BY menu_name ASC");
$empty_data = "No Menu Found";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PFP Menu List | Admin</title>
        <meta charset="utf-8">
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
  <div>
    <h2 class="text-center page-header" style="margin-top: auto;">Menu List</h2>
    <div style="display: flex; justify-content: space-between; align-items:center;">
        <h3>Foods Available</h3>
        <span style="background: lightblue; padding: 8px; border-radius: 4px; font-weight: bold;"><i class="fa fa-plus"></i>
            <a href="menus.php">ADD MENU</a>
        </span>
    </div>
    <table class="table table-responsive table-hover table-bordered table-lg">
      <thead style="font-size:1.7rem;">
          <tr>
            <th>S/No</th>
            <th><i class="fa fa-cutlery"></i> Food Name</th>
            <th><i class="fa fa-dollar"></i> Food Price</th>
            <th><i class="fa fa-cog"></i> Action</th>
          </tr>
      </thead>
                    <?php 
                    if(empty(mysqli_num_rows($select_menus))) {
                      echo "<i><p style='text-align:center; font-size: 1.7rem; position: absolute; 
                      margin-top: 5%; width: 100%; font-weight: bold; color: green;'>Current No Data Found</p></i>";
                    } else
                    while($row = mysqli_fetch_array($select_menus)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['menu_name']; ?></td>
                            <td><?php echo $row['menu_price']; ?></td>
                            <td>
                                <a style="background: lightgreen; padding: 6px; border-radius: 4px; color: black;" 
                                href="update_menu.php?update_menu=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i> UPDATE</a>
                            </td>
                            <td>
                                <a style="background: darkred; padding: 6px; border-radius: 4px; color: white;" 
                                href="server.php?remove_menu=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i> DELETE</a>
                            </td>
                        </tr>

                    </tbody>

                    <?php 
                
                    ?>
                    <?php }
                    ?>
                
  </div>
</section>
<script src="index.js" defer></script> 
</body>
</html>