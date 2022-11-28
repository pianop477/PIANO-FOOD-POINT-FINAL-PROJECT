<?php 
include('server.php');

include('footer.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PFP | Sign up Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width:device-width, initial scale=1">
		<!--customer files-->
		<link rel="stylesheet" href="bootstrap3.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
	<!--nav links-->
	<nav class="navbar navbar-inverse">
    <div class="container-fluid" style="font-size:1.7rem; font-weight: bold;">
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

<!--section-->

<div>
	<div class="text-center page-header" style="margin-top: auto;">
		<h2>SIGN UP FORM</h2>
	</div>
	<div class="container-fluid" style="width: 40%; align-content: center; 
	border: 1px solid #ccc; border-radius: 5px; padding: 20px; background: orange;">
		<form method="POST" action="#" onsubmit="return validate()">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" name="fname" class="form-control col-sm-6" placeholder="First Name" id="fname">
				</div>
				<span style="color: red;" id="fname-text"></span>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user"></i></span>
					<input type="text" name="lname" class="form-control col-sm-6" placeholder="Last Name" id="lname">
				</div>
				<span id="lname-text" style="color: red;"></span>
			</div>

			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-phone"></i></span>
					<input type="text" name="phone" class="form-control col-sm-6" placeholder="Phone Number" id="phone">
				</div>
				<span style="color: red;" id="phone-text"></span>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
					<input type="text" name="street" class="form-control col-sm-6" placeholder="Street Name" id="street">
				</div>
				<span style="color: red" id="street-text"></span>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input type="email" name="email" class="form-control col-sm-6" placeholder="Email Address" id="email">
				</div>
				<span style="color: red;" id="email-text"></span>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-key"></i></span>
					<input type="password" name="password" class="form-control col-sm-6" placeholder="Enter Password" id="password">
				</div>
				<span style="color: red;" id="pass1-text"></span>
			</div>
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-key"></i></span>
					<input type="password" class="form-control col-sm-6" placeholder="Confirm Password" id="pass2">
					<span style="color: red;" id="pass2-text"></span>
				</div>
				<span style="color:red;" id="err-text"></span>
			</div>
			<div style="display: flex; justify-content: space-between; align-items: center;">
				<div class="form-group">
					<button type="submit" name="send" class="btn btn-success" style="background: darkred;">Sign Up</button>
				</div>
				<p style="text-align: right;">Have an Account? <a href="login.php" style="color: white; font-size: 1.5rem; 
				background: black; padding: 10px; border-radius: 4px;"><i class="fa fa-sign-in"></i> Login</a></p>
			</div>
		</form>
	</div>
</div>

<script src="index.js"></script>
    </body>
</html>