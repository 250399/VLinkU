<?php
session_start();
require_once('connect.php');

$statement=$_POST['sbtn'];
if(isset($_SESSION['UID'])){
	$mail=$_SESSION['UID'];
	echo $mail;
	
$sql="UPDATE problem_stmt SET commit = '1', comitted_by= '$mail' WHERE id='$statement'"; 
if(mysqli_query($conn,$sql)){
	echo "<script type='text/javascript'>window.location.replace('homepage.php?commited')</script>";
}else{
	$message= "Failed to commit";
	echo "<script type='text/javascript'>alert('$message');window.location.replace('homepage.php?failed');</script>";
}

}else{
	$message="Register yourself/login";
	 echo "<script type='text/javascript'>alert('$message');window.location.replace('reg.php');</script>";
}


echo "<script type='text/javascript'>alert('$message');
		window.location.replace('homepage.php?Failed !!');
		</script>";
	
?>
