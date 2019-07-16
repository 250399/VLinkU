<?php

require_once('connect.php');

$usrname=$_POST['Username'];
$emailid=$_POST['email'];	
$pwd=$_POST['psw'];
$pno=$_POST['Phone_No'];
$Role=$_POST['role'];

$sql="INSERT INTO registration_details (Username,Email,Password,PhoneNo,role) VALUES('$usrname','$emailid','$pwd','$pno','$Role')";

if(!mysqli_query($conn,$sql))
{
		$message = "Registration Failed!";
echo "<script type='text/javascript'>alert('$message');</script>";
}
else{
	$res=mysqli_query($conn,"insert into profilepic(email,status)values('$emailid','0')");
	$message = "Registration successful !!";
echo "<script type='text/javascript'>alert('$message');</script>";
	
}
header("location:homepage.php");
?>