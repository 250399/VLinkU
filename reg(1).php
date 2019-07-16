<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/jpg" href="handshake.jpg"/ >
  <title>VLinkU</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	background-image:url("night.jpg");
	background-size:cover;
    font-family: Arial, Helvetica, sans-serif;
    background-color: black;
}
.Absolute-Center {
	float:right;
	}


.Absolute-Center.is-Responsive {
  width: 50%; 
  height: 70%;
  min-width: 450px;
  max-width: 450px;
  padding-left: 20px;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
	margin-top:20px;
  border-radius: 20px;
    padding: 16px;
    background-color: #232120;
    color: white ;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
`    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
input[type=tel], input[type=number] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #e1e1e1;
}
input[type=text], input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #e1e1e1;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #FA391B;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    border-radius: 50px;
}
h1 {
  color: #FA391B
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}
input{
  border-radius: 30px;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #ffffff;
    color: 
    text-align: center;
}
img {
    opacity: 0.5;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}

container:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
#nav{
	height:65px;
	width:100%;
	background-color:gray;
	opacity:0.3;
	}
#nav a{
	
	opacity:1;
	text-decoration:none;
	color:white;
	line-height:63px;
	padding:25px;
}
#nav a:hover{
	background-color:blue;
}
#nav input[type=text],input[type=password]{
	height:10px;
	width:200px;

	}
</style>

</head>
<body>
<div id="nav">
<a href="">HOME</a>
<a href="">BUSINESS</a>
<a href="">ABOUT US</a>
<a href="">HELP</a>
<a href="">CONTACT</a>
<div style="float:right; padding-bottom:0px;margin-top:10px;background-color:white">
<span style="color:white;">Email</span><input type="text">
<span style="color:white;">Password</span><input type="password">
</div>
</div>
<form method="post" action="registration.php">
	
	<div class="row">
    <div class="Absolute-Center is-Responsive">
  <div class="container">
    <h1><center>Register</center></h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="username"><b>Username</b></label>
    <input type="text" name="Username" placeholder="Enter username" pattern="[a-z]{1,15}" title="Username should only contain lowercase letters. e.g. john" required>

    <label for="email"><b>Email</b></label>
    <input type="text" name="email" placeholder="Enter Email"  
           pattern=".+@gmail.com" size="30" required 
           title="Must be a @gmail.com email address" required>

     <label for="psw"><b>Password</b></label>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter valid password"  required>

    

<label for="phonenum"><b>Phone Number</b></label><br/>
  Phone Number (format: xxx-xxx-xxxx):
  <input type="tel" name="Phone_No" pattern="^\d{3}-\d{3}-\d{4}$" required >

  <label for=" 	"><b>What is your Role</b></label>
        
                <input type="radio" name="role" value="Developer" checked> Developer
        <input type="radio" name="role" value="Entrepreneur" checked> Entrepreneur<br>

    <script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>


       
    </div>


    <hr>

    <button type="submit" class="registerbtn">Register</button>
    

    <p style="color:white;margin-left:100px">Already have an account? <a href="homepage.php">Sign in</a></p>
 
  </div>
 
 
</div>
</div>
</div>
</div>
</form>


</body>
</html>