<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
//$characters = json_decode($data); // decode the JSON feed

$characters = json_decode($data, true); // decode the JSON feed and make an associative array

echo $characters[0]['title'];
?>
</body>
</html>