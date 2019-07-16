<?php
session_start();
require_once('connect.php');
//require 'PHPMailerAutoload.php';
//include("class.smtp.php");
//include("class.phpmailer.php");
//require_once('./PHPMailer.php');
$usrname=$_POST['Username'];
$emailid=$_POST['email'];	
$pwd=$_POST['psw'];
$pno=$_POST['Phone_No'];
$Role=$_POST['role'];

$r=mysqli_query($conn,"SELECT * FROM registration_details WHERE Email ='$emailid'");
$result=mysqli_fetch_array($r);
if($result==0){
$sql="INSERT INTO registration_details (Username,Email,Password,PhoneNo,role) VALUES('$usrname','$emailid','$pwd','$pno','$Role')";

if(mysqli_query($conn,$sql))
{
	//
if(mysqli_query($conn,"insert into profilepic(email,status)values('$emailid','0')"))
{
	//
	$message = "Registration successful !!";
}
}
}
/*$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'zzzaxwk@gmail.com';                 // SMTP username
$mail->Password = '@9004546038';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('zzzaxwk@gmail.com', 'VLinkU');
$mail->addAddress($emailid);     // Add a recipient
               // Name is optional
$mail->addReplyTo('zzzaxwk@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'Thank you for registering! Please click on this button to verify
</br><form method="post" action="http://localhost/projectss/verified.php">
<button style="color:white;
background-color:green;	
height:50px;
width:100px;
border-radius:10px;
border:0;"> Verify</button>
</form>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
if(!$mail->send()) {
    echo 'Registration falied!';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	$_SESSION['Vmail']=$emailid;
    
 */
	$message = 'Registration Successful!';
	echo "<script type='text/javascript'>
	
	alert('$message');
	window.location.replace('L.php');
	</script>";
	exit();
/*
}
	
}
else{$message = "Registration Failed!";
	echo "<script type='text/javascript'>
	alert('$message');
	window.location.replace('reg.php');
	</script>";
	exit();
}
}else
	{$message = "Registration Failed!";
	echo "<script type='text/javascript'>
	alert('$message');
	window.location.replace('reg.php');
	</script>";
	exit();
}
}
else
	{$message = "Registration Failed!";
	echo "<script type='text/javascript'>
	alert('$message');
	window.location.replace('reg.php?EmailAlreadyExist');
	</script>";
	exit();
	}
 */
?>
