<!DOCTYPE html>
<html>
<head>
	<title>How to Use the JavaScript Fetch API to Get JSON Data</title>
</head>
<body>
<script type="text/javascript">
	
	// Replace ./data.json with your JSON feed
fetch('./data.json').then(response => {
  return response.json();
}).then(data => {
  // Work with JSON data here
  console.log(data);
}).catch(err => {
  // Do something for an error here
});
</script>

</body>
</html>