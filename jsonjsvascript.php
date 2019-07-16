<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	var data = '[ { "name": "Swapnil", "gender": "Male" }, { "name": "Kavya", "gender": "Female" } ]'; 

	data = JSON.parse(data);

	console.log(data[1].name);


	//foreach loop to iterate data

	for (var i = 0; i < data.length; i++) {
	console.log(data[i].name + ' is a ' + data[i].gender + '.');
}
</script>

</body>
</html>