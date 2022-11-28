<?php 
session_start();
//check the session start time is se or not...........................

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
    $msg = "";

   // die($first_name . " " . $last_name . " " . $phone_number . " " . $street_name . " " . $email);

   $check_user = mysqli_query($conn, "SELECT * FROM customer WHERE email = '$email' ");
   
   if(mysqli_num_rows($check_user)) {
   echo "<script>alert('Email Already Taken by someone else, please try the different one')</script>";

   }

    else {
    $password_encrypt = password_hash($password, PASSWORD_DEFAULT);
   
    $insert_user = mysqli_query($conn, "INSERT INTO customer (first_name, last_name, phone, street, email, password) 
    VALUES ('$first_name', '$last_name', '$phone_number', '$street_name', '$email', '$password_encrypt')");
    //$success_message = "Account created successfully";

}
if($insert_user == true) {
    echo $msg = "<script>
    alert('Account created successfully');
    document.location.href = 'login.php';
    </script>";
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
        $msg = "";
      //   die($quantity.' '.$total_price.' '.$user_order.' '.$food_type);
   $insert_orders = mysqli_query($conn, "INSERT INTO orders(customer_id,order_name,quantity,total_price) 
   VALUES('$user_order','$food_type','$quantity','$total_price')");
   if($insert_orders){
      echo "<script>
      alert('Your Order has been Sent. Thank you for purchasing with Us!');
      document.location.href = 'index.php';
      </script>";
   }
    
    }

 }


//login ....................................................................>>

if(isset($_POST['login'])) {
   $username = htmlspecialchars($_POST['email']);
   $password = htmlspecialchars($_POST['password']);
   $err_login = "Incorrect Username or Password ";
   $msg = "";

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
      $user = $_SESSION['firstname'];

       if(password_verify($password, $check_user_data['password'])) {
          // header('location:index.php');

          if($_SESSION['user_type']==0){
            echo $msg = "<script>
            alert('Hi $user! Welcome Customer, All Foods are Available for You');
            document.location.href = 'user_dashboard.php'; 
            </script>";
          } else{
            echo $msg = "<script>
               alert('Hi $user! Welcome Manager, All are set for You');
               document.location.href = 'admin_dashboard.php';
            </script>";
          }
   }
}
}
//update user type...............................................

if(isset($_POST['edit'])){
   // echo'hellooooo';
   $id = htmlspecialchars(($_POST['id']));
   $user_directory = htmlspecialchars(($_POST['usertype']));
   // die($first_name.' '.$last_name.' '.$phone.' '.$street.' '.$email.' '.$user_directory);
   $update_user_info = mysqli_query($conn, "UPDATE customer 
   SET directory = '$user_directory' WHERE id='$id' ");
   if($update_user_info){
      echo "<script>
      alert('User Info Updated Successfully');
      document.location.href = 'users.php';
      </script>";
   }
}
//logout ............................................>
if(isset($_GET['logout'])){
unset($_SESSION['user_id']);
header('location:login.php');

}

//deleting users...............................

if(isset($_GET['remove_user'])) {
   // die('heelo');
   $id = $_GET['remove_user'];
   $msg = "";
   //die($id);

   $delete_user = mysqli_query($conn, "DELETE FROM customer WHERE id = '$id' ");

   if($delete_user) {
      echo $msg = "<script>
      alert('User deleted successfully');
      document.location.href = 'users.php';
      </script>";
   }
}

//deleting food from menu list
if(isset($_GET['remove_menu'])) {
   $id = $_GET['remove_menu'];
   $msg = "";

   //die ($id);
   $delete_menu = mysqli_query($conn, "DELETE FROM menus WHERE id = '$id' ");
   if($delete_menu == TRUE) {
      echo $msg = "<script>
         alert('Food has been removed to the List');
         document.location.href = 'admin_menu.php';
      </script>";
   }

   }

//updating food menu
if(isset($_POST['edit_menu'])) {
   $id = htmlspecialchars($_POST['id']);
   $food_name = htmlspecialchars($_POST['food_name']);
   $food_price =  htmlspecialchars($_POST['food_price']);
   $msg = "";

   //die ($id .' ' .$food_name .' '. $food_price);
   $update_menu = mysqli_query($conn, "UPDATE menus SET menu_name = '$food_name', menu_price = '$food_price' WHERE id = '$id' ");

   if($update_menu) {
      echo $msg = "
      <script>
         alert('Food menu updated successfully');
         document.location.href = 'admin_menu.php';
      </script>";
   }
}
//deleting orders from order table
if(isset($_GET['remove_order'])) {
   $id = $_GET['remove_order'];
   $msg = "";

   //die ($id);
   $delete_order = mysqli_query($conn, "DELETE FROM orders WHERE orders.id = '$id' ");

   if($delete_order) {
      echo $msg = "
      <script>
         alert('Customer Order has been deleted');
         document.location.href = 'ordertable.php';
      </script>";
      // header('location:ordertable.php');
   }
}

//requesting page for changing password...........................

if(isset($_POST['reset-password'])) {
   $email = htmlspecialchars($_POST['emailfoget']);
   $msg = "";

   $check_email = mysqli_query($conn, "SELECT * FROM customer WHERE email = '$email' ");

   if(mysqli_num_rows($check_email)) {
      $fetch_email = mysqli_fetch_array($check_email);
      $_SESSION['user_email'] = $fetch_email['email'];
      $_SESSION['id'] = $fetch_email['id'];
      echo $msg = "<script>
      alert('Your password has been reseted successfully, click OK to Continue....');
      document.location.href = 'reset.php';
      </script>";
   }else {
      echo $msg = "<script>
      alert('Email Does Not Exist in the Database, Please Try another one');
      document.location.href = 'forgetpass.php';
      </script>";
   }
}

if(isset($_POST['change-password'])) {
   $captched_id = $_SESSION['id'];
   $capt_email = $_SESSION['user_email'];
   $password1 = $_POST['password'];
   $password2 = $_POST['newpassword'];
   $msg = "";

   if($password2 != $password1) {
      echo $msg = "<script>
      alert('Password Does not Match, Please Try Again');
      </script>";
   }else {
      $password_encrypt = password_hash($password1, PASSWORD_DEFAULT);
      $update_password = mysqli_query($conn, "UPDATE customer SET password = '$password_encrypt' WHERE email = '$capt_email' ");

      if($update_password) {
         echo $msg = "<script>
         alert('Password has been changed successfully, Click OK to Login');
         document.location.href = 'login.php';
         </script>";
      }
   }
}
//reply section ................................................................................>
if(isset($_GET['reply'])){
   $id = $_GET['reply'];
   $msg = "";
   // die($id);
   $return_msg = mysqli_query($conn, "UPDATE orders SET reply = 1 where id = '$id' ");
   if($return_msg){
      echo "<script>
      alert('Message has been sent successfully');
      document.location.href = 'ordertable.php';
      </script>";
   }
}

//deleting all processed order ...............................................................>

if(isset($_GET['clear'])) {
   $clear = $_GET['clear'];
   $delete_orders = mysqli_query($conn, "DELETE * FROM orders WHERE reply = 1");

   if($delete_orders) {
      header('location:ordersprocessed.php');
   }
}
//updating user account details ............................................................>>>>
if(isset($_POST['update'])) {
   // die ('hello');
   $id = $_POST['user_id'];
   $firstName = $_POST['fname'];
   $lastName = $_POST['lname'];
   $streetName = $_POST['street'];
   $phoneNumber = $_POST['phone'];
   $msg = "";

   // die($id . " " .$firstName . " " . $lastName . " " . $streetName . " " . $phoneNumber);

   $update_user = mysqli_query($conn, "UPDATE customer SET first_name = '$firstName', last_name = '$lastName', 
   street = '$streetName', phone = '$phoneNumber' WHERE id = '$id' ");

   if($update_user && $_SESSION['id']==0) {
      echo $msg = "
      <script>
         alert('User Info Updated Successfully');
         document.location.href = 'admin_dashboard.php';
      </script>";
   }else {
      echo $msg = "
      <script>
         alert('User Infor Updated Successfully');
         document.location.href = 'user_dashboard.php';
      </script>";
   }

}


?>