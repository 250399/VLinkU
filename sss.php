<?php
session_start();
require_once('connect.php');
$res=mysqli_query($conn,'select * from registration_details');
$a=array();
$row=mysqli_fetch_assoc($res);
	$jarray=$row;
	foreach ($characters as $character) :

	{
         echo $character->Username; 
         echo $character->Email; 
        
}

echo json_encode($jarray);

echo "<pre>";
print_r($jarray);
echo "</pre>";
?>