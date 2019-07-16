<?php
session_start();
require_once('connect.php');
$EmailID=$_SESSION['Vmail'];
echo "Your Email has been Verified! <a href='l.php'>Click here For Login</a>";
$sql="INSERT INTO email_verify (Email,verified)VALUES('$EmailID','1') "; 
if(mysqli_query($conn,$sql)){
	$message='Your email has been Verified';
	echo "<script type='text\javascrpit'>alert($message);</script>";}
else{
		$message1='Sorry! There was Problem in processing your Request';
		echo "<script type='text\javascript'>alert($message1);</script>";
	}



?>