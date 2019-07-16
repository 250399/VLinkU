<html>
<head>
<?php
session_start();
?>
<style>
body{background-image:url('night.jpg');
background-size:cover}
#nav{
	height:50px;
	width:100%;	
	background-color:red;
 	text-size:45px;
	text-indent:25px;
	line-height:50px;
	}
#nav a{
	text-decoration:none;
	color:white;	
	text-size:45px;
	}
#container{

	float:left;
	background-color:gray;
	height:100%;
	width:200px;
	border:11px;
	display:inline-block;
	}

#container2{

	display:inline-block;
	float:right;
	background-color:gray;
	height:100%;
	width:200px;
	border:11px;
	margin-left:200px;
}

#main{

	float:left;
	
	display:inline-block;
	margin-left:70px;
	
	height:100%	;
	
	
}


#main textarea {
	margin-top:50px;
	height:80px;
    width: 600px;
    min-width: 200px;
    max-width: 600px;
    transition: width 0.25s;    
}
#btn{
	margin-top:20px;
	background-color:green;
	border:0;
	border-radius:5px;
	height:50px;
	width:100px;
	cursor:pointer;
	color:white;
		
	}
</style>
</head>
<body>
<div id="nav">
<a href="">HOME</a>
&nbsp;
&nbsp;
&nbsp;
<a href="">ABOUT US</a>
&nbsp;&nbsp;&nbsp;
<a href="">CONTACT US</a>
<a style="float:right;margin-right:10px" href="">LOGOUT</a>
</div>
<div id="container">
</div>
<div id="container2">
</div>
<div id="main">
<form method="post" action="pst.php">
<textarea name="txt" id="txt" rows="4" cols="" ></textarea>

</br>
<button input type="submit" id="btn"  >Post</button>	
<button type="button" id="btn" onclick="location.href='homepage.php'"  style="display:inline-block">Cancel</button>
</form>

</div>
</body>
</html>
