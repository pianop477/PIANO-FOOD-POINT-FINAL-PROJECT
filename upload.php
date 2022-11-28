<?php
include('dbconnect.php');


if(isset($_POST['add-menu'])) {
    // die('hello');
    $food_name = $_POST['food'];
    $food_price = $_POST['price'];
    $file = $_FILES['file']['name'];
    $msg = "";

//    print_r($file);

    $results = mysqli_query($conn, "SELECT * FROM menus WHERE menu_name = '$food_name'
     && food_img = '$file' ");

     if(mysqli_num_rows($results)) {
        echo $msg = "<script>
        alert('Food Already Exist in Menu List, Please try another one!');
        document.location.href = 'menus.php';
        </script>";

     }else {
        $insert_menu = mysqli_query($conn, "INSERT INTO menus(menu_name, menu_price, food_img) 
        VALUES('$food_name', '$food_price', '$file')");

        if($insert_menu) {
            move_uploaded_file($_FILES['file']['tmp_name'], "images/$file");

            echo $msg = "<script>
            alert('Food Menu added Successfully');
            document.location.href = 'admin_menu.php';
            </script>";
        }else {
            echo $msg = "<script>
            alert('Menu Failed to be Added, Please check the error and try again');
            document.location.href = 'menu.php';
            </script>";
        }
     }

}

?>