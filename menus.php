<?php   

include('upload.php');
include('footer.php');
// include('header_admin.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PFP Register Foods | Admin</title>
        <link rel="stylesheet" href="bootstrap3.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

<body>
<!--Navigation links--> 
<!--section -->
    <section>
        <div class="container-fluid" style="position: absolute; width:100%; margin-top:1%;">
            <div>
                <h2 class="text-center page-header">Add Menu</h2>
            </div>
            <div class="container" style="width: 50%; align-content: center;">
                <form action="upload.php" method="POST" onsubmit="return validate_menus()" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="control-label">Food Name: </label>
                        <input type="text" name="food" class="form-control" id="food">
                        <span id="food-text" style="color:red;"></span>
                    </div>
                    <div class="form-group">
                        <label for="price" class="control-label">Food Price:  </label>
                        <input type="text" class="form-control" name="price" id="price">
                        <span id="price-text" style="color: red;"></span>
                    </div>
                    <div class="form-group">
                        <label for="files" class="control-label">Food Image: </label>
                        <input type="file" name="file" class="form-control" id="file" accept=".jpg, .jpeg, .png, .gif" required>  
                    </div>
                    <button type="submit" name="add-menu">ADD MENU</button>
                </form>
            </div>
        </div>
    </section>

<script src="index.js"></script>
</body>
</html>