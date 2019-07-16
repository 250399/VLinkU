<?php
session_start();
require_once('connect.php');
require 'PHPMailerAutoload.php';
include("./phpmailer/class.smtp.php");

$usrname=$_POST['Username'];
$emailid=$_POST['email'];	
$pwd=$_POST['psw'];
$pno=$_POST['Phone_No'];
$Role=$_POST['role'];

$sql="INSERT INTO registration_details (Username,Email,Password,PhoneNo,role) VALUES('$usrname','$emailid','$pwd','$pno','$Role')";

	
if(mysqli_query($conn,$sql))
{
	$result=mysqli_fetch_array($r);
	if($result==0){
	$res=mysqli_query($conn,"insert into profile_pic(email,status)values('$emailid','0')");
	$message = "Registration successful !!";
$ress=mysqli_query($conn,"SELECT * FROM registration_details WHERE role ='Developer'");
	
	if($ress==Developer){
	header("location: homepage.php");
	}
	else{
	header("location: l.php");	
	}
$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'vaishnaviutekar9@gmail.com';                 // SMTP username
$mail->Password = 'manhattan21225';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('vaishnaviutekar9@gmail.com', 'VLinkU');
$mail->addAddress($emailid);     // Add a recipient
               // Name is optional
$mail->addReplyTo('vaishnaviutekar9@gmail.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'Thankyou for Registering! Please Click on this Button to Verify your account<b/><form method="post" action="http://localhost/project/verified.php"><button style="background-color: green; height : 40px; width: 70px; border-radius: 10px;border : 0;">Verify</button></form>';
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
	$_SESSION['gmail']=$emailid;
    echo 'Registration Successful! Please verify your email and come';
}
echo "<script type='text/javascript'>alert('$message');</script>";
	
}
else{$message = "Registration Failed!";
	echo "<script type='text/javascript'>
	alert('$message');
	window.location.replace('reg.php?VerifyYourEmail');
	</script>";
	exit();
}
}
else
	{$message = "Registration Failed!";
	echo "<script type='text/javascript'>
	alert('$message');
	window.location.replace('reg.php?VerifyYourEmail');
	</script>";
	exit();
}


?>