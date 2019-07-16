<html>
<head>
<?php
session_start();
require_once('connect.php');
if(isset($_POST['cmtbox'])){
$_SESSION['sid']=$_POST['cmtbox'];
}
$result=mysqli_query($conn,"select * from problem_stmt where id ='$_SESSION[sid]'");
$res=mysqli_fetch_array($result);
			
?>
</script>
<style>
body{background-image:url('night.jpg');
background-size:cover}
#nav{
	height:50px;
	width:100%;	
	background-color:black;
 	text-size:45px;
	text-indent:25px;
	line-height:50px;
	}
	#nav:hover{
		color:gray;
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
	#zzz{
		height:100px;
		width:600px;}
	#zzzz{
		padding:0;
	}
</style>
</head>
<body>
<div id="nav">
<a href="homepage.php">HOME</a>
&nbsp;
&nbsp;
&nbsp;
<a href="about.html">ABOUT US</a>
&nbsp;&nbsp;&nbsp;
<a href="">CONTACT US</a>
<a style="float:right;margin-right:10px" href="Logout.php">LOGOUT</a>
</div>
<div id="container">
</div>
<div id="container2">
</div>

<div id="main">

<div id="zzz">
<?php

$email=$res['email'];
$result2=mysqli_query($conn,"select * from profilepic where email ='$email'");
$res2=mysqli_fetch_array($result2);

if($res2['status']=='1')
{
	echo "<img src='uploads/profile".$email.".jpg' width='50px' height='50px' style='border-radius:50px;margin-left:50px;
	margin-top:30px'> &nbsp;&nbsp;&nbsp;";
}
else{
	echo '<img src="unknown_profile.png" width="50" height="50" style="border-radius:50px;margin-left:50px;
	margin-top:30px" >&nbsp;&nbsp;&nbsp;';
}
echo "<p style='font-size:28px;display:inline-block;'>".$res['stmt']."</p>";
echo "<hr style:'width:700px;border: 1px solid palevioletred'>";
echo "<br/>";

echo '<form method="post" action="postcom.php">';
echo '<textarea name="txt" id="txt" rows="4" cols="" ></textarea>';
echo "<button input type='submit' name='btn' value=$res[id] >Post</button>";	

	
	$result1=mysqli_query($conn,"select * from comment_table where cid ='$_SESSION[sid]' order by cid desc");
while($res1=mysqli_fetch_array($result1))
{

echo "<div id='zzzz'>";
echo "<ul>";	
echo "<li ><p style='font-size:15px; padding:5px;'>".$res1['comment']."</p> </li>";
echo "</ul>";
echo "<br/>";
echo "</div>";
}
?>
</div>
<div id=commentsection>
</div>
</br>
<?php
?>
</form>

</div>
</body>
</html>
  