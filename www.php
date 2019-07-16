<?php
session_start();
require_once('connect.php');
$res=mysqli_query($conn,'select * from registration_details');
$a=array();
while($row=mysqli_fetch_assoc($res)){
	$jarray=$row['Username'];
	$jemail=$row['Email'];
	$PhoneNo=$row['Role'];
	$Role=$row['PhoneNo'];

echo json_encode($jarray);
echo json_encode($jemail);
echo json_encode($PhoneNo);
echo json_encode($Role);
	}/*
echo json_encode($jarray);
echo json_encode($jemail);
echo json_encode($PhoneNo);
echo json_encode($Role);
echo "<pre>";
print_r($jarray);
echo "</pre>";
*/
?>