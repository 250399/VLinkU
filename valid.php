<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$data = '{
	"name": "Swapnil",
	"gender": "Male"
}';
//use json function to convert json string to php object
$character = json_decode($data);

echo $character->name;
?>
</body>
</html>