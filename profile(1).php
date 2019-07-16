<html>	
<head>
<?php
require_once('../connect.php');
session_start();
$UserID=$_SESSION['UID'];
$sql="SELECT * FROM registration_details WHERE email='$UserID'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
$_SESSION['name']=$row['Username'];
$_SESSION['phoneno']=$row['PhoneNo'];
$_SESSION['Role']=$row['Role'];
$_SESSION['EID']=$row['id'];
?>
<style>
body{
	background-image:url("night.jpg");
	background-size:cover;
}
#container{	
	position:relative;
	height:300px;
	width:100%;

	color:white;
	margin-left:400px;
	}
#ax{float:left;
padding:30px;}
#zzz{
	
}
</style>
<link rel="stylesheet" type="text/css" src="style1.css">
<link rel="icon" type="image/jpg" href="handshake.jpg">
<title>VLinkU</title>
</head>
<body>
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
		
			echo '<img src="uploads/profile'.$id.'.jpg" width="140" height="150" >';
	}
	else{
		
		echo '<img src="unknown_profile.png" width="140" height="150" >';
	}

echo "</div>";}
?>

<br/>
	<input type="file" name="file" id="file" style="float:left" >
	<button type="submit" name="submit" id="submit" value="submit">upload</button>
	</form> 
</div>
<br/>
<br/>
<div id = "zzz">
<?php
echo 'Name = ';
echo $_SESSION['name'];
echo "<br/>";
echo 'email = ';
echo $_SESSION['UID'];
echo "<br/>";
echo "Phone Number = ";
echo $_SESSION	['phoneno'];
echo "<br/>";
echo "Role = ";
echo $_SESSION['Role'];
?>
</div>
</div>
</body>
</html>