<?php
session_start();
require_once('connect.php');

$prblm_stmt=$_POST['tarea'];
$prblm_stmt = nl2br(htmlentities($prblm_stmt, ENT_QUOTES, 'UTF-8'));
$id=$_SESSION['UID'];
if(strlen($prblm_stmt!=NULL)){
	$sql="INSERT INTO problem_stmt (stmt,email) values ('$prblm_stmt','$id')";
	echo $prblm_stmt,$id;

	if(!mysqli_query($conn,$sql))
{
		$message = "Failed!";
echo "<script type='text/javascript'>alert('$message');
		window.location.replace('homepage.php?Failed !!');
		</script>";
}
else{
	$message = " successful !!";
echo "<script type='text/javascript'>alert('$message');window.location.replace('homepage.php?Successful !!');</script>";
		
}

header("url:homepage.php");
}
else{
	$message = "Post cannot be null!";
echo "<script type='text/javascript'>alert('$message');window.location.replace('homepage.php?Successful !!');</script>";
	
}

?>
