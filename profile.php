<?php
session_start();
require_once('connect.php');
$UserID=$_SESSION['UID'];
$sql="SELECT * FROM registration_details WHERE email='$UserID'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
$_SESSION['name']=$row['Username'];
$_SESSION['phoneno']=$row['PhoneNo'];
$_SESSION['Role']=$row['Role'];
$_SESSION['EID']=$row['id'];
?>

<html>	
<head>
<style>
body{
}
#container{	
	position:relative;
	height:300px;
	width:100%;

	color:black;
	
	}
	
#nav a{
	padding : 25px;
}
#nav a:hover{
	background-color: red;
	opacity :0.2;
}
#nav{
	margin-left:-10px;
	text-indent: 50px;
	height: 70px;
	width: 100%;
	 
}


#nav{margin-top:-10px;
	text-indent: 50px;
	height: 70px;
	width: 1365px;
	background-color:black;
	 
}

#nav a{
	
	text-decoration: none;
	line-height: 65px;
	color: white; 
}
#ax{
}
#zzz{
	margin-top:-50px;
	
}
#zzz table{
	border-collapse:collapse;
	height:150px;
	margin-left:auto;
	margin-right:auto;
	font-weight:bold;
}
hr{height:2px solid red;}
button{
	
	height:20px;
	background:none;
	background-color:red;
	border:none;
	border-radius:10px;
	opacity:.5;
}
input[type="file"]
{
	opacity:0.5;
}
</style>
<link rel="stylesheet" type="text/css" src="style1.css">
<link rel="icon" type="image/jpg" href="hand.jpg">
<title>VLinkU</title>
</head>
<body>

		<div id="nav">
				<img src="hand.jpg" height="55" width="75" style="float :left; margin-top: 6px; margin-left: 40px;border-radius:10px">			
				
				<a href="homepage.php">HOME</a>
				&nbsp;
				&nbsp;				
				<a href="about.html">ABOUT US</a>
				&nbsp;
				&nbsp;
				<a href="">HELP</a>
				&nbsp;
				&nbsp;
				<a href="">CONTACT</a>
				<?php
								if(isset($_SESSION['UID']))
				{
					echo "<a href='Logout.php ' style='float: right; margin-top:-20px;height:40px'>LOGOUT</a>";
				}
				?>
</div>
<div id="container">
<br/>
<div id=ax>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<?php

$id=$_SESSION['UID'];

$result=mysqli_query($conn,"select * from profilepic where email='$id'");
while($res=mysqli_fetch_assoc($result))
{echo "<div>";
	if($res['status']== 1)
	{
		
			echo '<img src="uploads/profile'.$id.'.jpg" width="1365px" height="300px" style="margin-left:-10px;margin-top:-25px">';
	}
	else{
		
		echo '<img src="unknown_profile.png" width="1365" height="300" style="margin-left:-10px;margin-top:-25px">';
	}

echo "</div>";}
?>

<br/>
	<input type="file" name="file" id="file" style="float:left" >
	<button type="submit" name="submit" id="submit" value="submit">upload</button>
	</form> 
</div>
<hr>
<br/>

<div id = "zzz">
<?php
echo '<table ><tr><td>Name  </td>';
echo '<td> : '.$_SESSION['name'].'</td> </tr>';
echo "<br/>";
echo '<tr><td>email  </td>';
echo '<td> : '.$_SESSION['UID'].'</td> </tr>';
echo "<br/>";
echo "<tr><td>Phone Number  </td>'";
echo '<td> : '.$_SESSION	['phoneno'].'</td> </tr>';
echo "<br/>";
echo "<tr><td>Role  </td>'";
echo '<td> : '.$_SESSION['Role'].'</td> </tr>';
echo "</table>";
?>
<br/>
<hr>
<?php

$email=$UserID;
$result2=mysqli_query($conn,"select * from profilepic where email ='$email'");
$res2=mysqli_fetch_array($result2);
$result=mysqli_query($conn,"select * from problem_stmt where email ='$UserID'");
while($res=mysqli_fetch_array($result)){

if($res2['status']=='1')
{
	echo "<img src='uploads/profile".$email.".jpg' width='50px' height='50px' style='border-radius:50px;margin-left:50px;
	margin-top:30px'> &nbsp;&nbsp;&nbsp;";
}
else{
	echo '<img src="unknown_profile.png" width="50" height="50" style="border-radius:50px;margin-left:50px;
	margin-top:30px" >&nbsp;&nbsp;&nbsp;';
}
echo "&nbsp";
echo "&nbsp";
echo "<p style='font-size:20px;display:inline-block;'>".$res['stmt']."</p>";
echo "<br/>";
}
?>
</div>
</div>
</body>
</html>