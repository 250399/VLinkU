<?php
session_start();
?>

<html>
<head>
	  <link rel="icon" type="image/jpg" href="handshake.jpg"/ >
  <title>VLinkU</title>
<style>
.cancelbtn {

	border-radius: 20px;
    width: 80px;
    height: 30px;
    padding: 5px 10px;
    background-color: #f44336;
}


.container {
	background: rgba(0, 0, 0, 0.2);
	width: 300px;
	height: auto;
	background-color: #232120
    padding: 16px;
}

span.psw {
    float: center;
    padding-top: 16px;
	
}
.psw a{
	text-decoration:none;
	color:white;

}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

body {
	background-image: url("man.jpeg");
	background-size:  cover;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    
}


div{
	border-radius: 20px;
	background-color: #232120;
	margin-left:550px;
	margin-right:550px;
	height:500px;	
	color:white;
	line-height:50px;margin-top:100px;}
	input{height:30px;
	border-radius:50px;
	padding:5px;}
img{margin-top:-50px;
border-radius:50px;}
input[type="submit"]{
	border:0;
	color:white;
	cursor:pointer;
	}

</style>

<title>
	VlinkU
</title>
</head>
<body>
	<center>
	<form method="post" action="Log.php">
	<div class="container">
	<img src="unknown_profile.png" height="100px">
	</br>
	</br>
	
	Login ID:
	<input type="text" name="Login_id" placeholder="abc@gmail.com"></br></br>
	Password:
	<input type="password" name="pass" placeholder="****"></br></br>
	<input type="submit" class="cancelbtn" value="Login" >
    <button type="button" class="cancelbtn" id="btn" onclick="window.location.href='reg.php'">Signup</button></br>
	
	</script>	
	<span class="psw"> <a href="#">Forgot password?</a></span>
    <br>
	</div>
	<br>
	</form>
	</center>
	</body>
	</html>