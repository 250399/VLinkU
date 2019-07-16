<?php
session_start();
require_once('connect.php');
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<title>
	VlinkU
</title>
</head>
<body>
	<div id="container">
		<div class=slider>
		</div>
		<div id="nav">
			<ul>
				<li><a href="">Home</a></li>
				<?php
				if(isset($_SESSION['EID']))
				{
					echo "<li><a href='profile.php	'>MyProfile</a></li>";
				}
				else
				{
					echo "<li><a href='l.php'>Login</a></li>";
					echo "<li><a href='reg.php'>Register</a></li>";	
				}
				?>
				<li><a href="">About Us</a></li>
				<li><a href="">Contact Us</a></li>	
				<?php
				if(isset($_SESSION['EID']))
				{
					echo "<li style='text-align:right'><a href='Logout.php	'>Logout</a></li>";
				}
				?>
				
			</ul>
		</div>
		<div id="nav2">
			<ul>
				<li><a href="">Post Problem-Statement</a></li>
				<li><a href="">View developers</a></li>
				<li><a href="">Home</a></li>
				
		</div>
		<div id="news">
		<?php
		$sql="SELECT * FROM problem_stmt ORDER BY stmt_id DESC";
		$result=mysqli_query($conn,$sql);
		while($res=mysqli_fetch_assoc($result))
		{
			echo "<ol>";
			echo "<li>";
			echo "<a href=''>";
			print"$res[stmt]";
			echo "</a>";
			echo "</li>";
			echo "<hr>";
			echo "</ol>";
		}
		?>
		</div>
	
	</div>
</body>
</html>
