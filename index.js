//addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 

//validate password

function validate() {
    let pass1 = document.getElementById('password').value;
    let pass2 = document.getElementById('pass2').value;
    let first_name = document.getElementById('fname').value;
    let last_name = document.getElementById('lname').value;
    let phone_number = document.getElementById('phone').value;
    let street = document.getElementById('street').value;
    let email = document.getElementById('email').value;
    

    if(first_name == "") {
        document.getElementById('fname').focus();
        document.getElementById('fname-text').innerHTML = "Enter Your First Name";
        return false;
    }
    if(last_name == "") {
        document.getElementById('lname').focus();
        document.getElementById('lname-text').innerHTML = "Enter your Last Name";
        return false;
    }
    if(phone_number == "") {
        document.getElementById('phone').focus();
        document.getElementById('phone-text').innerHTML = "Enter Your Phone number";
        return false;
    }
    if(street == "") {
        document.getElementById('street').focus();
        document.getElementById('street-text').innerHTML = "Enter your street";
        return false;
    }
    if(email == "") {
        document.getElementById('email').focus();
        document.getElementById('email-text').innerHTML = "Enter your Email Address";
        return false;
    }
    if(pass1 == "") {
        document.getElementById('password').focus();
        document.getElementById('pass1-text').innerHTML = "Enter Password";
        return false;
    }    
    if(pass1.length < 5) {
        document.getElementById('password').focus();
        document.getElementById('pass1-text').innerHTML = "Password too short, Enter at least 6 characters";
        return false;
    }
    if(pass2 == "") {
        document.getElementById('pass2').focus();
        document.getElementById('pass2-text').innerHTML = "Re-Enter Password";
        return false;
    }
    if(pass2 != pass1) {
        document.getElementById('pass2').focus();
        document.getElementById('err-text').innerHTML = "Password Not Match";
        return false;
    }

   

}

function validate_menus() {
    let food_name = document.getElementById('food').value;
    let price = document.getElementById('price').value;

    if(food_name == "") {
        document.getElementById('food').focus();
        document.getElementById('food-text').innerHTML = "Fill out this field";
        return false;
    }
    if(price == "") {
        document.getElementById('price').focus();
        document.getElementById('price-text').innerHTML = "Fill out this field";
        return false;
    }
}

//validate order form

function validate_quantity() {
    let quantity = document.getElementById('quantity').value;
    if(quantity == " ") {
        document.getElementById('quantity').focus();
        document.getElementById('err-quantity').innerHTML = "Enter value";
        return false;
    }

}

function validate_new_pass() {
    let password = document.getElementById('currentpassword').value;
    let pass1 = document.getElementById('pass1').value;
    let pass2 = document.getElementById('pass2').value;

    if(password == "") {
        document.getElementById('currentpassword').focus();
        document.getElementById('currentpass-text').innerHTML = "Fill out this Field";
        return false;
    }
    if(pass1 == "") {
        document.getElementById('pass2').focus();
        document.getElementById('pass1-text').innerHTML = "Fill out this Field";
        return false;
    }
    if(pass1.length <= 5 && pass1.length >= 17) {
        document.getElementById('pass1').focus();
        document.getElementById('pass1-text').innerHTML = "Characters length should be 6 - 16";
        return false;
    }
    if(pass2 == "") {
        document.getElementById('pass2').focus();
        document.getElementById('pass2-text').innerHTML = "Fill out this Field";
        return false;
    }

    if(pass2 != pass1) {
        document.getElementById('pass2').focus();
        document.getElementById('pass2-text').innerHTML = "Password Does not Match";
        return false;
    }
}
