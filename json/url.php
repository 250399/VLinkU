<?php
$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

//echo $characters[1]->name;

//using forech loop

foreach ($characters as $character) {
	echo $character->name . '<br>';
	echo $character->title. '<br>';
}


?>