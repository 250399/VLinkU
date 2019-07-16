<?php
session_start();
require_once('connect.php');
$Email=$_SESSION['UID'];
$statement=$_POST['txt'];
if(!mysqli_query($conn,"INSERT INTO problem_stmt (stmt,email) VALUES('$statement','$Email')"))
{
	$message="There was error processing your request";
		 echo "<SCRIPT type='text/javascript'> //not showing me this
		 window.location.replace('L.php');
        alert('$message');
            </SCRIPT>";
}
else
{
	echo "<script type='text/javascript'>location.href='homepage.php'</script> ";
}

?>