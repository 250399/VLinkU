<?php
session_start();
require_once('connect.php');
$EmailID=$_POST['Login_id'];
$pass=$_POST['pass'];
$sql="SELECT * FROM registration_details WHERE Email='$EmailID' and Password='$pass'"; 

$row=mysqli_query($conn,$sql);

$count=mysqli_fetch_array($row);
if($count>=1){
//	$res=mysqli_query($conn,"SELECT * FROM email_verify where Email='$EmailID'");
//	$result=mysqli_fetch_assoc($res);
//	if($result['Verified']==1){
	$_SESSION['UID']=$EmailID;
	$message="Login successful";
                 echo "<SCRIPT type='text/javascript'> //not showing me this
                 window.location.replace('index.php');
        alert('$message');
            </SCRIPT>";
//	else{
//		$message="Please Verify your Email and come";
//		 echo "<SCRIPT type='text/javascript'> //not showing me this
//		 window.location.replace('L.php');
  //      alert('$message');
    //        </SCRIPT>";
		
//	}
}
else{$message="Invalid Email or password";
		 echo "<SCRIPT type='text/javascript'> //not showing me this
		 window.location.replace('L.php');
        alert('$message');
            </SCRIPT>";
}

?>
