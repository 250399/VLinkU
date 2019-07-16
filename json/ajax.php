<!DOCTYPE html>
<html>
<head>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	

</script>
<script>
	$(document).ready(function () {
		var data;
		$.ajax({
			dataType: "json",
			url: 'data.json',
			data: data,
			success: function (data) {
				// begin accessing JSON data here
				console.log(data[0].name);
				console.log(data[1].name);
			}
		});
	});
</script>

</head>

<body>
<script type="text/javascript">
	
</script>

</body>
</html>