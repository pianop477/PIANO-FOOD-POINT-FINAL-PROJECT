<?php 
include('server.php');
include('footer.php');
include('header_customer.php');
//include('footer.php');
if(empty($_SESSION['user_id'])) {
  header('location:login.php');
}
if($_SESSION['user_type']!=0) {
  header('location:login.php');
}
$count = 1;
$select_menus = mysqli_query($conn, "SELECT * FROM menus ORDER BY menu_name ASC");
$empty_data = "No Menu Found";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PFP | Food Menu List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
<!--section -->
<section>
  <div>
    <div class="text-center page-header" style="margin-top: auto;">
        <h2>Menu List</h2>
        <p style="color: green; font-weight: bold; font-size: 1.5rem;"><i>Press ORDER to Purchase Your Favourite Food</i></p>
    </div>
    <h2>Foods Available</h2>
    <table class="table table-responsive table-hover table-bordered table-lg">
      <thead style="font-size: 1.7rem;">
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
                      margin-top: 5%; width: 100%; font-weight: bold; color: green;'>
                      Currently No Data Found</p></i>";
                    } else
                    while($row = mysqli_fetch_array($select_menus)) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $row['menu_name']; ?></td>
                            <td><?php echo $row['menu_price']; ?></td>
                            <td><a style="background: orange; padding: 5px; border-radius: 4px;" href="orders.php?purchase=<?php echo $row['id']; ?>"><i class="fa fa-shopping-bag"></i> ORDER</a></td>
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