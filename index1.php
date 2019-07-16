<?php
require_once('connect.php');
$result=mysqli_query($conn,"select * from registration_details");
$res=mysqli_fetch_array($result);
echo $res['Email'];
?>
