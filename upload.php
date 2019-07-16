<?php
session_start();
require_once('connect.php');	
if(isset($_POST['submit'])){
	$file=$_FILES['file'];
	
	
	$filename=$_FILES['file']['name'];
	$filetmpname=$_FILES['file']['tmp_name'];
	$filesize=$_FILES['file']['size'];
	$fileerror=$_FILES['file']['error'];
	$filetype=$_FILES['file']['type'];
		
	
	$fileExt=explode(".",$filename);
	$fileactext=strtolower(end($fileExt));
	
	
	$allowed=array("jpg","jpeg","png","gif");
	if(in_array($fileactext,$allowed)){
		if($fileerror==0){	
			$id=$_SESSION['UID'];
			$filenamenew="profile".$id.".".$fileactext;
			$fileDest='./uploads/'.$filenamenew;
			move_uploaded_file($filetmpname,$fileDest);
			mysqli_query($conn,"UPDATE profilepic SET status = 1 WHERE email='$id'");
			header("Location:profile.php?uploadsuccess");
			
		}else{echo "<script type=\"text/javascript\">alert('There was an error uploading file please try again'); </script>";}
	}else{
		echo "<script type=\"text/javascript\">alert('File type now allowed'); </script>";
	}
}
?>
