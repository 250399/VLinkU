<?php
session_start();
require_once('connect.php');
$cmtid=$_POST['btn'];
$cmt=$_POST['txt'];
$cmt = nl2br(htmlentities($cmt, ENT_QUOTES, 'UTF-8'));

if(isset($_SESSION['UID'])){
if(mysqli_query($conn,"insert into comment_table (cid,comment)values('$cmtid','$cmt')"))
{
	$message='commented';
	echo "<script type='text/javascript'> 
		window.location.replace('post_comment.php?commentsuccess');
            </script>";
}
}
else{$message='Please Login and come';
	echo "<script type='text/javascript'> 
		alert('$message');
		window.location.replace('post_comment.php?Loginandcome');
		
            </script>";
}

?>