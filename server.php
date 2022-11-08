<?php 
session_start();

include('dbconnect.php');

//customer registration
if(isset($_POST['send'])) {
    //die('Hello form');

    $first_name = htmlspecialchars($_POST['fname']);
    $last_name = htmlspecialchars($_POST['lname']);
    $phone_number = htmlspecialchars($_POST['phone']);
    $street_name = htmlspecialchars($_POST['street']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $err_message = "Email already Exist";

   // die($first_name . " " . $last_name . " " . $phone_number . " " . $street_name . " " . $email);

   $check_user = mysqli_query($conn, "SELECT * FROM customer WHERE email = '$email' ");
   
   if(mysqli_num_rows($check_user)) {
   echo "<script>alert('Email Already Exist')</script>";

   }

    else {
    $password_encrypt = password_hash($password, PASSWORD_DEFAULT);
   
    $insert_user = mysqli_query($conn, "INSERT INTO customer (first_name, last_name, phone, street, email, password) 
    VALUES ('$first_name', '$last_name', '$phone_number', '$street_name', '$email', '$password_encrypt')");
    //$success_message = "Account created successfully";

}
if($insert_user == true) {
    echo "<script>alert('Account created successfully')</script>";
   }


}

 //fetching data to the order form(index.php) and sending orders

 if(isset($_GET['purchase'])) {
    $id = $_GET['purchase'];

    $result = mysqli_query($conn, "SELECT * FROM menus WHERE id = '$id' ");
    $fetch_menus = mysqli_fetch_array($result);
    $_SESSION['chakula'] = $fetch_menus['menu_name'];
    $_SESSION['price'] = $fetch_menus['menu_price'];

    if(isset($_POST['send_order'])) {
        $quantity = htmlspecialchars($_POST['quantity']);
        $user_price = $_SESSION['price'];
        $user_order = $_SESSION['user_id'];
        $food_type = $_SESSION['chakula'];
        $total_price = $user_price*$quantity;
      //   die($quantity.' '.$total_price.' '.$user_order.' '.$food_type);
   $insert_orders = mysqli_query($conn, "INSERT INTO orders(customer_id,order_name,quantity,total_price) 
   VALUES('$user_order','$food_type','$quantity','$total_price')");
   if($insert_orders){
      echo "<script>alert('Your Order has been Sent. Thank you for purchasing with Us!') </script>";
   }
    
    }

 }

//adding menu list...................
 if(isset($_POST['add-menu'])) {
    $food_name = htmlspecialchars($_POST['food']);
    $food_price = htmlspecialchars($_POST['price']);
    $success_menus = "Food Successfully Added to Menu List";

    $insert_menu = mysqli_query($conn, "INSERT INTO menus (menu_name, menu_price) VALUES ('$food_name', '$food_price') ");

    if($insert_menu) {
       // echo $success_menus;
    }
 }


//login ................................

if(isset($_POST['login'])) {
   $username = htmlspecialchars($_POST['email']);
   $password = htmlspecialchars($_POST['password']);
   $err_login = "Incorrect Username or Password ";

   $check_user_now = mysqli_query($conn, "SELECT * FROM customer WHERE email='$username' ");

   if(mysqli_num_rows($check_user_now)) {
      $check_user_data = mysqli_fetch_array($check_user_now);
      $_SESSION['email'] =$check_user_data['email']; 
      $_SESSION['user_id'] =$check_user_data['id']; 
      $_SESSION['user_type'] = $check_user_data['directory'];
      $_SESSION['fullname'] = $check_user_data['first_name']. ' '. $check_user_data['last_name'];
      $_SESSION['street_name'] = $check_user_data['street'];
      $_SESSION['phone_number'] = $check_user_data['phone'];
      $_SESSION['firstname'] = $check_user_data['first_name'];
      $_SESSION['lastname'] = $check_user_data['last_name'];

       if(password_verify($password, $check_user_data['password'])) {
          // header('location:index.php');

          if($_SESSION['user_type']==0){
            header('location:user_dashboard.php');
          }
          else { 
          header('location:admin_dashboard.php');
          }
       
   }
}
}
//update user info...............................................

if(isset($_POST['edit'])){
   // echo'hellooooo';
   $id = htmlspecialchars(($_POST['id']));
   $first_name = htmlspecialchars(($_POST['fname']));
   $last_name = htmlspecialchars(($_POST['lname']));
   $phone = htmlspecialchars(($_POST['phone']));
   $street = htmlspecialchars(($_POST['street']));
   $email = htmlspecialchars(($_POST['email']));
   $user_directory = htmlspecialchars(($_POST['usertype']));
   // die($first_name.' '.$last_name.' '.$phone.' '.$street.' '.$email.' '.$user_directory);
   $update_user_info = mysqli_query($conn, "UPDATE customer 
   SET first_name = '$first_name', last_name = '$last_name', phone = '$phone', street = '$street', 
   email = '$email', directory = '$user_directory' WHERE id='$id' ");
   if($update_user_info){
      echo "<script>alert('User Info Updated Successfully')</script>";
      if($update_user_info == TRUE) {
         header('location:users.php');
      }
   }
}
if(isset($_GET['logout'])){
unset($_SESSION['user_id']);
header('location:login.php');

}

//deleting users...............................

if(isset($_GET['remove_user'])) {
   // die('heelo');
   $id = $_GET['remove_user'];
   //die($id);

   $delete_user = mysqli_query($conn, "DELETE FROM customer WHERE id = '$id' ");

   if($delete_user) {
      header('location:users.php');
   }
}

//deleting food from menu list
if(isset($_GET['remove_menu'])) {
   $id = $_GET['remove_menu'];
   //die ($id);
   $delete_menu = mysqli_query($conn, "DELETE FROM menus WHERE id = '$id' ");
   if($delete_menu == TRUE) {
      header('location:admin_menu.php');
   }

   }

//updating food menu
if(isset($_POST['edit_menu'])) {
   $id = htmlspecialchars($_POST['id']);
   $food_name = htmlspecialchars($_POST['food_name']);
   $food_price =  htmlspecialchars($_POST['food_price']);

   //die ($id .' ' .$food_name .' '. $food_price);
   $update_menu = mysqli_query($conn, "UPDATE menus SET menu_name = '$food_name', menu_price = '$food_price' WHERE id = '$id' ");

   if($update_menu) {
      header('location: admin_menu.php');
   }
}
//deleting orders from order table
if(isset($_GET['remove_order'])) {
   $id = $_GET['remove_order'];

   //die ($id);
   $delete_order = mysqli_query($conn, "DELETE FROM orders WHERE orders.id = '$id' ");

   if($delete_order) {
      header('location:ordertable.php');
   }
}

//forget password...........................

if(isset($_POST['reset-password'])) {
   $email = htmlspecialchars($_POST['emailfoget']);
   $password = htmlspecialchars($_POST['passwordfoget']);
   $confirmfogeter = htmlspecialchars($_POST['cofirm_pass']);
   
//die($email ." ".$password. " ".$confirmfogeter);
$select_user = mysqli_query($conn, "SELECT * FROM customer WHERE email = '$email' ");
if(mysqli_num_rows($select_user)){
  if($password == $confirmfogeter){
$new_password = password_hash($confirmfogeter, PASSWORD_DEFAULT);
$get_newpassword = mysqli_query($conn, "UPDATE customer SET password = '$new_password' WHERE email = '$email' ");
if($get_newpassword){
   echo '<script>alert("password forgoted successfully!")</script>';
}
  }else{
   echo '<script>alert("password not Match")</script>';
  }
}else{
   echo '<script>alert("User does not exist")</script>';
}
}

//reply section ................................................................................>
if(isset($_GET['reply'])){
   $id = $_GET['reply'];
   // die($id);
   $return_msg = mysqli_query($conn, "UPDATE orders SET reply = 1 where id = '$id' ");
   if($return_msg){
      header('location:ordertable.php');
   }
}

?>
